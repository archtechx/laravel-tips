---
title: 'You can use recursive queries to query hierarchical trees'
tweet_id: '1555543666231369728'
thread_slug: weekly-thread-2022-31
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FZOXjYuXwAA6ucp.jpg'
created_at: 2022-08-05T13:18:05+00:00
slug: you-can-use-recursive-queries-to-query-hierarchical-trees
---
⚡ Database Tip

Recursive queries are a great solution to e.g. querying multiple levels in a tree with just one query. But you should use cycle detection otherwise your query might run forever or fail for loops in your data. https://sqlfordevs.io/cycle-detection-recursive-query