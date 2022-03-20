---
title: 'You can use `pluck` directly on Eloquent *classes* — no need to query the instances first'
tweet_id: '1505269885760249857'
thread_slug: weekly-thread-2022-11
author_username: ecrmnn
images:
    - 'https://pbs.twimg.com/media/FOECA3KVgBI8ja2.jpg'
created_at: 2022-03-19T19:48:01+00:00
slug: you-can-use-pluck-directly-on-eloquent-classes-no-need-to-query-the-instances-first
---
Calling pluck directly on a model is the most performant way to retrieve a single column from all models in Laravel. Calling get/all before pluck will read all models into memory before plucking the value.