---
title: 'Adding WHERE scopes which use an indexed column to a query that''s primarily filtered by another column is a great way to speed up DB performance'
tweet_id: '1471864653491974151'
thread_slug: weekly-thread-2021-50
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FGafd_JXMAEDgP5.jpg'
created_at: 2021-12-17T15:27:33+00:00
slug: adding-where-scopes-which-use-an-indexed-column-to-a-query-thats-primarily-filtered-by-another-column-is-a-great-way-to-speed-up-db-performance
---
⚡️ Database Tip

Sometimes you have seldom used queries and you can't add an index on columns for these queries. A nice trick is to use another indexed condition so the rows are filtered by the indexable column first and afterwards again for the more limiting condition.
