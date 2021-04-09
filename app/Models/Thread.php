<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Collection;
use Orbit\Concerns\Orbital;

/**
 * @property string $slug
 * @property string $title
 * @property string|null $tweet_id
 * @property string $author_username
 * @property string $content
 * @property array $links
 */
class Thread extends Model
{
    use Orbital;

    public $timestamps = false;

    public $casts = [
        'links' => 'array',
    ];

    public static function schema(Blueprint $table)
    {
        $table->string('slug')->unique();
        $table->string('title');
        $table->string('tweet_id')->nullable();
        $table->foreignId('author_username')->constrained('authors', 'username');
        $table->text('content');
        $table->json('links')->default('{}');
        $table->timestamp('created_at');
    }

    public static function booted()
    {
        static::creating(fn (self $model) => $model->created_at ??= now());
    }

    public function tips(): HasMany
    {
        return $this->hasMany(Tip::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_username', 'username');
    }

    public function getTweetUrlAttribute(): string
    {
        return "https://twitter.com/{$this->author_username}/status/{$this->tweet_id}";
    }

    public function getKeyName()
    {
        return 'slug';
    }

    public function getIncrementing()
    {
        return false;
    }

    public function links(): Collection
    {
        return collect($this->links)->map(fn (array $link, string $key) => route('thread.link', ['thread' => $this, 'link' => $key]));
    }
}
