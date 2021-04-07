---
title: 'Create fluent objects'
tweet_id: '1272822468219109377'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean3zqXWAAASnOP.png'
created_at: 2020-06-16T09:24:58+00:00
slug: create-fluent-objects
---

You can also create objects with fluent APIs. Gradually add data by with separate calls, and only require the absolute minimum in the constructor.

Each method will return $this, so you can stop at any call.