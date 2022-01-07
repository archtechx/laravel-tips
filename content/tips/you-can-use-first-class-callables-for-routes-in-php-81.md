---
title: 'You can use first class callables for routes in PHP 8.1'
tweet_id: '1479467932379799552'
thread_slug: weekly-thread-2021-01
author_username: archtechx
images:
    - 'https://pbs.twimg.com/media/FHNP2kIVUAIqiCH.jpg'
created_at: 2022-01-07T15:00:16+00:00
slug: you-can-use-first-class-callables-for-routes-in-php-81
---
🔥 You can use first class callables for routes in PHP 8.1

The caveat is that the methods need to be static because there's no syntax for referencing instance methods on classes

I don't use constructor DI in my apps, so static methods are fine despite feeling a bit non-standard