---
title: 'RateLimiter''s attempt() accepts a fourth parameter for the "decay"'
tweet_id: '1502367770226294785'
thread_slug: weekly-thread-2022-10
author_username: pascalbaljet
images:
    - 'https://pbs.twimg.com/media/FNZv2KJXsAceOtF.jpg'
created_at: 2022-03-11T19:36:03+00:00
slug: ratelimiters-attempt-accepts-a-fourth-parameter-for-the-decay
---
💡 The 'attempt()' method of the RateLimiter that comes with @laravelphp has an optional fourth argument to specify the decay.

Both examples dispatch max 12 events per minute, but the latter spread the events throughout the minute. Incredible, isn't it? 🤩

#Laravel #PHP #webdev