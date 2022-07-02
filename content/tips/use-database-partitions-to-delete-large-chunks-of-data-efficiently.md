---
title: 'Use database partitions to delete large chunks of data efficiently'
tweet_id: '1542863735810797569'
thread_slug: weekly-thread-2022-26
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FWacS3jWAAAHLyu.jpg'
created_at: 2022-07-01T13:32:34+00:00
slug: use-database-partitions-to-delete-large-chunks-of-data-efficiently
---
⚡ Database Tip

Some applications want to periodically delete old historic data (or have to because of regulations). Deleting billions of rows is a very slow task that could take several minutes and may take your application down. Use partitions for efficient deleting!