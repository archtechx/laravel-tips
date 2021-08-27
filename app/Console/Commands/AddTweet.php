<?php

namespace App\Console\Commands;

use App\Models\Thread;
use App\Models\Tip;
use App\Twitter\Tweet;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class AddTweet extends Command
{
    protected $signature = 'tweet:add {tweet}';

    protected $description = 'Add a tweet';

    public function handle()
    {
        $id = Str::of($this->argument('tweet'))->afterLast('/')->before('?');

        $this->line('Fetching tweet ID ' . $id);

        $tip = Tip::fromTweet(
            $tweet = Tweet::fetch($id)
        );

        $tip->slug = $this->ask('Slug', $tip->defaultSlug());

        $tip->thread_slug = $this->choice('Thread', Thread::all()->pluck('slug', 'title')->prepend('- None - ', null)->toArray(), null);

        $tip->save();

        $this->info("Successfully saved tip to: content/tips/{$tip->slug}.md");
    }
}
