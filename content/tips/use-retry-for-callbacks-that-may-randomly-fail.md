---
title: 'Use retry() for callbacks that may randomly fail'
tweet_id: '1471864638199451648'
thread_slug: weekly-thread-2021-01
author_username: alexjgarrett
images:
    - 'https://pbs.twimg.com/media/FGP3MSQWQAYKjSm.jpg'
created_at: 2021-12-17T15:27:30+00:00
slug: use-retry-for-callbacks-that-may-randomly-fail
---
.@laravelphp out here helping me again, with its helpers!

I was hitting a shaky API that sometimes failed.

Here, the retry function tries the callback 3 times, with a 2 second interval in-between retries.