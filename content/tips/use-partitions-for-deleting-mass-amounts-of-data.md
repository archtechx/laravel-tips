---
title: 'Use partitions for deleting mass amounts of data'
tweet_id: '1479467943276670979'
thread_slug: weekly-thread-2022-01
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FIQQcQSXwAk2rDy.jpg'
created_at: 2022-01-07T15:00:19+00:00
slug: use-partitions-for-deleting-mass-amounts-of-data
---
⚡ ️Database Tip

Some applications want to periodically deleted old historic data (or have to because of regulations). Deleting billions of rows is a very slow task which could take several minutes and may take your application down. Use partitions for efficient deleting!
