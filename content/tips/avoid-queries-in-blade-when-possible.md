---
title: 'Avoid queries in Blade when possible'
tweet_id: '1272826450559803392'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean7jvPWkAAp2_6.jpg'
created_at: 2020-06-16T09:40:48+00:00
slug: avoid-queries-in-blade-when-possible
---

Sometimes you may want to execute DB queries in blade. There are some ok use cases for this, such as in layout files.

But if it's a view returned by a controller, pass the data in the view data instead.