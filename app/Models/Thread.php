<?php

namespace App\Models;

use App\Twitter\Tweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Thread extends Model
{
    use Orbital;

    public $timestamps = false;

    public static function schema(Blueprint $table)
    {
        $table->string('slug')->unique();
        $table->string('title');
        $table->string('tweet_id')->nullable();
        $table->foreignId('author_username')->constrained('authors', 'username');
        $table->text('content');
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

    public function getTweetUrlAttribute(): string|null
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
}
