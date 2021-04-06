<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Thread;
use App\Models\Tip;
use App\Twitter;
use App\Twitter\Tweet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ogthread = [
            ['slug' => 'laravel-clean-code-tactics', 'title' => 'Laravel Clean Code Tactics', 'content' => 'The OG thread. Get printable PDF versions [here](https://gum.co/laravel-clean-code).'],
            1272822437181378561,
            1272822438406094848,
            1272822439689555969,
            1272822441392377856,
            1272822442990473216,
            1272822444621991937,
            1272822446278750208,
            1272822448145272832,
            1272822450137546753,
            1272822452201144321,
            1272822453753036801,
            1272822455393026049,
            1272822457011970048,
            1272822458563821568,
            1272822460631539712,
            1272822462040899584,
            1272822466528845825,
            1272822468219109377,
            1272822470656045057,
            1272822472329572355,
            1272822475957645312,
            1272822478260363265,
            1272826427902234625,
            1272826429483495424,
            1272826431609933825,
            1272826433417752576,
            1272826435254845441,
            1272826437167468544,
            1272826438891298816,
            1272826441424613378,
            1272826443630817281,
            1272826446717870081,
            1272826448810737670,
            1272826450559803392,
            1272826452652810240,
            1272826454301163520,
            1272826456960315392,
            1272826458667442176,
            1272826462031286272,
            1272826465378357251,
        ];

        $onertonetip = [
            ['slug' => '1-rt-1-tip', 'title' => '1 RT = 1 tip', 'content' => 'A thread of misc tips, originally one tip per one retweet.'],
            1308082888324374528,
            1308082889561604102,
            1308082892162162690,
            1308082893865005068,
            1308084124947820554,
            1308084774586773510,
            1308085658095886336,
            1308086649184751619,
            1308088600278560768,
            1285486044561969154, // embed
            1308094765544734720,
            1308096302530600963,
            1308100321164619777,
            1308109980504133633,
            1308113281018728450,
            1308114698299154433,
            1308114699913961472,
            1308114701415571457,
            1308126491188883463,
            1308127034565066766,
            1308134105389953024,
            1308134107118022666,
            1308134110595084288,
            1308136547217281026,
            1308140146374696962,
            1307716271904096262,
            1253524892055560193,
            1233017064492761088,
            1308823625194233867
        ];

        foreach ([$ogthread, $onertonetip] as $thread) {
            $meta = $thread[0];
            $root = $thread[1];

            $threadTweet = Tweet::fetch($root);
            $threadSlug = Thread::create($meta + [
                'tweet_id' => $root,
                'author_username' => Author::firstOrCreate([
                    'username' => $threadTweet->author->username,
                    'name' => $threadTweet->author->name,
                    'avatar' => $threadTweet->author->profile_image_url,
                ])->username,
            ])->slug;

            foreach ($thread as $tweet) {
                if ($tweet === $meta || $tweet === $root) {
                    continue;
                }

                Tip::fromTweet(Tweet::fetch($tweet), $threadSlug)->save();
            }
        }
    }
}
