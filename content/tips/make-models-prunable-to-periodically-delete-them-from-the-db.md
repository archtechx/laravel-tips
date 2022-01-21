---
title: 'Make models prunable to periodically delete them from the DB'
tweet_id: '1484566701089849344'
thread_slug: weekly-thread-2022-03
author_username: mmartin_joo
images:
    - 'https://pbs.twimg.com/media/FJTZyx9XEAcctdk.jpg'
created_at: 2022-01-21T16:40:58+00:00
slug: make-models-prunable-to-periodically-delete-them-from-the-db
---
💡#Laravel Eloquent Tip

Laravel 8 introduced the Prunable trait. You can use it to delete old models on a scheduled basis.

You don't need to write custom commands anymore: