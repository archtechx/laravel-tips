---
title: 'Using small integers instead of entire class strings for morph relations can improve their performance'
tweet_id: '1456649615571177476'
thread_slug: weekly-thread-2021-44
author_username: aarondfrancis
images:
    - 'https://pbs.twimg.com/media/FDR-ODWXMA0MA5L.jpg'
created_at: 2021-11-05T15:48:26+00:00
slug: using-small-integers-instead-of-entire-class-strings-for-morph-relations-can-improve-their-performance
---
When using Laravel morphs, you can eek out some extra performance by using small integers instead of strings for your morph types.

Smaller, faster indexes for the database to manage! 

Especially useful for tables like comments or audits, which can be many millions of rows.