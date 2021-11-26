---
title: 'You can convert Eloquent Collections back to a Query Builder instance'
tweet_id: '1464247625046114305'
thread_slug: weekly-thread-2021-47
author_username: RBilloir
images:
    - 'https://pbs.twimg.com/media/FEvymV7XsAE3Vv2.png'
created_at: 2021-11-26T15:00:12+00:00
slug: you-can-convert-eloquent-collections-back-to-a-query-builder-instance
---
A tiny tip about #laravel eloquent.

To retrieve the Query Builder after filtering the results: you can use `-&gt;toQuery()`.

The method internally use the first model of the collection and a `whereKey` comparison on the Collection models.