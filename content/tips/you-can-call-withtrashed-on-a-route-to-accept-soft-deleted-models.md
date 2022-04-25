---
title: 'You can call `withTrashed()` on a route to accept soft deleted models'
tweet_id: '1512463792432566274'
thread_slug: weekly-thread-2022-14
author_username: cosmeescobedo
images:
    - 'https://pbs.twimg.com/media/FPizAZxVsAUl-WZ.jpg'
created_at: 2022-04-08T16:14:02+00:00
slug: you-can-call-withtrashed-on-a-route-to-accept-soft-deleted-models
---
🔥 Laravel Tip: Route model binding soft-deleted models

By default, when using route model binding will not retrieve models that have been soft-deleted.
You can change that behavior by using `withTrashed` in your route.