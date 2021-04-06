<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

/**
 * @property string $username
 * @property string $avatar
 * @property string $name Full name.
 * @property-read string $profile_url
 */
class Author extends Model
{
    use Orbital;

    public $timestamps = false;

    public static function schema(Blueprint $table)
    {
        $table->string('username')->primary();
        $table->string('avatar');
        $table->string('name');
    }

    public function getProfileUrlAttribute(): string
    {
        return 'https://twitter.com/' . $this->username;
    }

    public function getKeyName()
    {
        return 'username';
    }

    public function getIncrementing()
    {
        return false;
    }
}
