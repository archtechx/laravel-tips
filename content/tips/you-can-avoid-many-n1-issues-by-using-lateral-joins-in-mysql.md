---
title: 'You can avoid many n+1 issues by using lateral joins in MySQL'
tweet_id: '1530215268915417089'
thread_slug: weekly-thread-2022-21
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FTmHagcX0AEBn_k.jpg'
created_at: 2022-05-27T15:52:04+00:00
slug: you-can-avoid-many-n1-issues-by-using-lateral-joins-in-mysql
---
⚡️ Database Tip

Sometimes you want to get e.g. the last three orders for *every* customer. Normal joins can't do that. You have to execute n+1 queries in code, which is slow!

But with lateral joins, you can do one for-each loop join in SQL 🤯
https://sqlfordevs.io/for-each-loop-lateral-join