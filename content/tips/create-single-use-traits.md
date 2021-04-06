---
title: 'Create single-use traits'
tweet_id: '1272822478260363265'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean5BnEWkAEPUTe.jpg'
created_at: 2021-04-06T16:07:31+00:00
slug: create-single-use-traits
---

Adding methods to classes where they belong is cleaner than creating action classes for everything, but it can make the classes grow big

Consider using traits. They're meant *primarily* for code reuse, but there's nothing wrong with single-use traits