<?php

namespace App\Models;

use App\Twitter\Tweet;
use App\Twitter\TwitterImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;
use Illuminate\Support\Str;

/**
 * @property string $slug
 * @property string $title
 * @property string $content
 * @property string $tweet_id
 * @property string $author_username
 * @property string|null $thread_slug
 * @property string[] $images
 * @property-read Author $author
 * @property-read Thread|null $thread
 * @property-read \Illuminate\Eloquent\Collection|Image[] $images
 * @property-read string $tweet_url
 */
class Tip extends Model
{
    use HasFactory, Orbital;

    public $timestamps = false;

    public $casts = [
        'images' => 'array',
    ];

    public static function schema(Blueprint $table)
    {
        $table->string('slug')->unique();
        $table->string('title');
        $table->string('tweet_id');
        $table->foreignId('thread_slug')->nullable();
        $table->foreignId('author_username')->constrained('authors', 'username');
        $table->json('images')->default('[]');
        $table->timestamp('created_at');
    }

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class, 'thread_slug', 'slug');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_username', 'username');
    }

    public function getTweetUrlAttribute(): string
    {
        return "https://twitter.com/{$this->author_username}/status/{$this->tweet_id}";
    }

    /** @return TwitterImage[] */
    public function images(): array
    {
        return array_map(fn (string $url) => new TwitterImage($url), $this->images);
    }

    public static function fromTweet(Tweet $tweet, string $threadSlug = null): self
    {
        return new static([
            'title' => (string) Str::of(Str::of($tweet->text)->explode("\n")->first())->rtrim('.')->replaceMatches('/^([^a-zA-Z]*)/', ''), // remove any non-ascii characters from the beginning
            'content' => (string) Str::of($tweet->text)->explode("\n")->skip(1)->join("\n"),
            'tweet_id' => $tweet->id,
            'thread_slug' => $threadSlug ?? Thread::firstWhere('tweet_id', $tweet->threadId)?->slug,
            'author_username' => Author::firstOrCreate([
                'username' => $tweet->author->username,
                'name' => $tweet->author->name,
                'avatar' => $tweet->author->profile_image_url,
            ])->username,
            'images' => array_map(fn (TwitterImage $image) => $image->url, $tweet->images),
            'created_at' => $tweet->created_at,
        ]);
    }

    public static function booted()
    {
        static::creating(function (self $model) {
            $model->created_at ??= now();
            $model->slug ??= $this->defaultSlug();
        });

        static::addGlobalScope('order', fn (Builder $query) => $query->orderBy('created_at', 'desc'));
    }

    public function getKeyName()
    {
        return 'slug';
    }

    public function getIncrementing()
    {
        return false;
    }

    public function defaultSlug(): string
    {
        return Str::slug($this->title);
    }
}
