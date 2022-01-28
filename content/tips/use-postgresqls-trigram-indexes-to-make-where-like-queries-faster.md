---
title: 'Use PostgreSQL''s trigram indexes to make WHERE LIKE queries faster'
tweet_id: '1487081932202463236'
thread_slug: weekly-thread-2022-04
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FKB7gJiWQAwc5QS.jpg'
created_at: 2022-01-28T15:15:35+00:00
slug: use-postgresqls-trigram-indexes-to-make-where-like-queries-faster
---
⚡️ Database Tip

Every database performance guide is repeating the false statement stating WHERE LIKE '%search%' queries can't use an index. That is just not true! Most probably your database can't, but PostgreSQL implements trigram indexes which will make this really fast!