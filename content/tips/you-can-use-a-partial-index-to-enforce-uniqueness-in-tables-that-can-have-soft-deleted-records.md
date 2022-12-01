---
title: 'You can use a partial index to enforce uniqueness in tables that can have soft-deleted records'
tweet_id: '1596508365370191873'
thread_slug: weekly-thread-2022-35
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FhHXgF4XoAAHwU3.jpg'
created_at: 2022-11-26T14:17:10+00:00
slug: you-can-use-a-partial-index-to-enforce-uniqueness-in-tables-that-can-have-soft-deleted-records
---
⚡️ Database Tip

Unique indexes can not be created in some cases because a value is duplicated by e.g. soft-deleted rows.

But with partial indexes and creative tricks you can exclude some rows to create the uniqueness constraint on a selection of rows.

https://sqlfordevs.com/unique-index-ignore-some-rows