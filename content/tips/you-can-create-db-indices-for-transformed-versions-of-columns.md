---
title: 'You can create DB indices for transformed versions of columns'
tweet_id: '1512463807167139846'
thread_slug: weekly-thread-2022-14
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FPk6CjSWYAAXwyn.jpg'
created_at: 2022-04-08T16:14:06+00:00
slug: you-can-create-db-indices-for-transformed-versions-of-columns
---
⚡️ Database Tip

Most developers are puzzled that indexes are not used for e.g. WHERE LOWER(email) = ?. But contrary to common belief, an index can be created for these cases! It's called a function-based index and is supported by MySQL and PostgreSQL.

https://sqlfordevs.io/tips/function-based-index
