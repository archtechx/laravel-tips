---
title: 'Partial indexes are useful for enforcing rules that only apply conditionally'
tweet_id: '1527688613932044289'
thread_slug: weekly-thread-2022-20
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FTCG2anXoAIB0U2.jpg'
created_at: 2022-05-20T16:32:03+00:00
slug: partial-indexes-are-useful-for-enforcing-rules-that-only-apply-conditionally
---
⚡️ Database Tip

Sometimes you want to make columns unique but you can't because e.g. there are still soft-deleted rows in the table witht the same value. By only including relevant rows (partial index) you can still enforce uniqueness, and you can even simulate it for MySQL!