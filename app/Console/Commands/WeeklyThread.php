<?php

namespace App\Console\Commands;

use App\Models\Thread;
use App\Models\Tip;
use App\Twitter\Tweet;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class WeeklyThread extends Command
{
    protected $signature = 'thread:add {url} {week?}';

    protected $description = 'Add a weekly thread';

    public function handle()
    {
        // 41
        $week = $this->argument('week') ?? date('W');

        // https://twitter.com/archtechx/status/1448992205138444334?s=20
        $url = $this->argument('url');

        // 1448992205138444334
        $id = $this->extractID($url);

        $slug = 'weekly-thread-2022-' . $week;

        Tip::where('thread_slug', $slug)->delete();
        Thread::where('slug', $slug)->delete();

        $tweet = Tweet::fetch($id);

        /** @var Thread $thread */
        $thread = Thread::create([
            'slug' => $slug,
            'title' => "Weekly thread #{$week} of 2022",
            'tweet_id' => $id,
            'author_username' => 'archtechx',
            'content' => $tweet->text,
            'created_at' => $tweet->created_at,
        ]);

        while ($answer = $this->ask('Add tweet? Paste URL', 'no')) {
            if (! Str::of($answer)->startsWith('http')) {
                break;
            }

            $tweet = Tweet::fetch($this->extractID($answer));

            $child = Tweet::fetch($this->extractID(
                Str::of($tweet->text)->afterLast('https://')->prepend('https://')
            ));

            $tweet->images = $child->images;
            $tweet->author = $child->author;

            $tip = Tip::fromTweet($tweet, $thread->slug);

            $tip->content = $child->text;

            $tip->save();
        }

        return 0;
    }

    protected function extractID(string $tweetURL): string
    {
        return (string) Str::of($tweetURL)->after('/status/')->before('/')->before('?');
    }
}
