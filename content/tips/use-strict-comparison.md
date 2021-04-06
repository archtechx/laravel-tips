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