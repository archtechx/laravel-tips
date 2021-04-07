<?php

namespace App\Twitter;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

/**
 * @property TwitterImage[] $images
 */
class Tweet
{
    public string $id;
    public string $text;
    public TwitterUser $author;
    public ?string $threadId = null;
    public array $images = [];
    public Carbon $created_at;

    public function __construct(
        string $id,
        string $text,
        TwitterUser $author,
        ?string $threadId = null,
        Carbon $created_at,
        array $images = [],
    ) {
        $this->id = $id;
        $this->text = $text;
        $this->author = $author;
        $this->threadId = $threadId;
        $this->created_at = $created_at;
        $this->images = $images;
    }

    /** Fetch a tweet. */
    public static function fetch(string $id): Tweet
    {
        $response = Http::asJson()
            ->withToken(config('services.twitter.token'))
            ->get('https://api.twitter.com/2/tweets/' . $id, [
                'media.fields' => 'url',
                'tweet.fields' => 'conversation_id,entities,created_at',
                'user.fields' => 'profile_image_url',
                'expansions' => 'attachments.media_keys,author_id',
            ]);

        $text = $response->json('data.text');
        $author = $response->json('includes.users.*')[0];

        $links = $response->json('data.entities.urls', []);

        foreach ($links as $link) {
            // Image links are removed
            if (str_starts_with($link['display_url'], 'pic.twitter.com')) {
                $text = str_replace($link['url'], '', $text);
            }

            // Other links are converted to the full form
            $text = str_replace($link['url'], $link['expanded_url'], $text);
        }

        return new static(
            $id,
            trim($text),
            new TwitterUser(
                $author['id'],
                $author['name'],
                $author['username'],
                $author['profile_image_url'],
            ),
            $response->json('data.conversation_id'),
            Carbon::make($response->json('data.created_at')),
            array_map(fn (string $url) => new TwitterImage($url), $response->json('includes.media.*.url', [])),
        );
    }
}
