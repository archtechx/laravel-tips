---
title: 'Use explicit null handling in your DB queries when filtering for rows with empty value in a nullable column'
tweet_id: '1461703840755978242'
thread_slug: weekly-thread-2021-46
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FEEibLTXEAMaNrl.jpg'
created_at: 2021-11-19T14:32:07+00:00
slug: use-explicit-null-handling-in-your-db-queries-when-filtering-for-rows-with-empty-value-in-a-nullable-column
---
⚡️ Database Tip

Comparing anything to a null value is always null too (meaning false). Simple operations like searching for rows with an unequal value will be more complicated. But null safe operators are making those queries dead simple again.