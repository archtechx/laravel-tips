---
title: 'Rows can be stored in an already sorted way, instead of the default insertion order'
tweet_id: '1540401132014411776'
thread_slug: weekly-thread-2022-25
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FV2QgKRXwAIxTR_.jpg'
created_at: 2022-06-24T18:27:03+00:00
slug: rows-can-be-stored-in-an-already-sorted-way-instead-of-the-default-insertion-order
---
⚡️ Database Tip

In most applications, all rows are physically sorted in the database file by their insertion order. By sorting them instead optimally for your application a huge databases will still be amazingly fast.

https://sqlfordevs.io/sorted-table-faster-range-scan