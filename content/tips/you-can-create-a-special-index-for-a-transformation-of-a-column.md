---
title: 'You can create a special index for a transformation of a column'
tweet_id: '1596508360001482753'
thread_slug: weekly-thread-2022-35
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FdvFZNTXwAAwzV6.jpg'
created_at: 2022-11-26T14:17:09+00:00
slug: you-can-create-a-special-index-for-a-transformation-of-a-column
---
⚡️ Database Tip

Most developers are puzzled that indexes are not used for e.g. WHERE LOWER(email) = ?. But contrary to common belief, an index can be created for these cases! It's called a function-based index and is supported by MySQL and PostgreSQL.

https://sqlfordevs.com/function-based-index