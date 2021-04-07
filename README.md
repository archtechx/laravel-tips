# Laravel Code Tips

This project is a simple Laravel application that uses:
- Ryan Chandler's [Orbit](https://github.com/ryangjchandler/orbit) package for storing data in markdown files,
- custom command for generating a static version of the website (this will later be extracted to a separate and more robust package),
- [Flipp](https://useflipp.io) for beautiful OpenGraph & Twitter Card previews,
- [Lars Klopstra](https://twitter.com/larsklopstra)'s amazing design skills. Thanks a ton for the design ❤️

The live version can be found on [laravel-code.tips](https://laravel-code.tips) or if you like emojis, that's [💻🔥⚡️💡.y.at](https://💻🔥⚡️💡.y.at).

Definitely feel free to submit content; it can be a great way to promote your work (not that you can't submit others' tips, we accept all that are good!).

Right now all tips should be on Twitter, but later we'll make it easier to add them standalone as well. That said, it's best to share your work on your Twitter profile before adding it here, since we link back to your Twitter post & profile, which will help you grow an audience.

## Submitting tips

Open a PR adding a new file to `content/tips`. The file name should be a unique slug of the tip. The content should look like this:
```md
---
title: 'Use strict comparison'
tweet_id: '1272826452652810240'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean722QXgAENwmW.jpg'
created_at: 2021-04-06T16:07:36+00:00
slug: use-strict-comparison
---

ALWAYS use strict comparison (=== and !==). If needed, cast things go the correct type before comparing. Better than weird == results

Also consider enabling strict types in your code. This will prevent passing variables of wrong data types to functions
```

The `slug` matches the file name, the `author_username` is the Twitter handle of the tip author, `tweet_id` is the id of the tweet with the tip, and `images` is an array of images that should be shown between the heading and the content.

## Local setup

If you'd like to seed the database with content, create a new Twitter application and set the `TWITTER_TOKEN` variable in `.env` to the Bearer token of the app. That said, you likely won't need this because all the default data is available in this repository already. So you only need to do this if you want to add a lot of tweets in bulk.

Otherwise, the project doesn't require any database, so you can just `git clone` it and open it in your browser, e.g. using Valet or `artisan serve`.

To generate the static HTML run `composer generate` and to preview it run `composer serve`.
