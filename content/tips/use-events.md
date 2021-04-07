---
title: 'Use events'
tweet_id: '1272822453753036801'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean07-jXkAErgaL.jpg'
created_at: 2020-06-16T09:24:55+00:00
slug: use-events
---

Consider offloading some logic from controllers to events. For example, when creating models.

The benefit is that creating these models will work the same everywhere (controllers, jobs, ...) and the controller has one less worry about the details of the DB schema