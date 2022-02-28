---
title: 'Use the `WITH TIES` clause to return more than the `LIMIT`-ed amount when there are multiple results with the same value'
tweet_id: '1498010794155380736'
thread_slug: weekly-thread-2022-08
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FMSIa6kXsAQ2Axf.jpg'
created_at: 2022-02-27T19:02:59+00:00
slug: use-the-with-ties-clause-to-return-more-than-the-limit-ed-amount-when-there-are-multiple-results-with-the-same-value
---
⚡️ Database Tip

Everyone knows the LIMIT clause. But what do you do if you want to have e.g. the employees with the TOP 3 salaries *and* not exclude the 4th or 5th one earning the same as the 3rd? The WITH TIES clause can return more results if the value is the same. Great!