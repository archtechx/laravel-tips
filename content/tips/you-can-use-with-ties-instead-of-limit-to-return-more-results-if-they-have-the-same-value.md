---
title: 'You can use WITH TIES instead of LIMIT to return more results if they have the same value '
tweet_id: '1553002673531543552'
thread_slug: weekly-thread-2022-30
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/FYqFF_wWAAAAGKm.jpg'
created_at: 2022-07-29T13:01:05+00:00
slug: you-can-use-with-ties-instead-of-limit-to-return-more-results-if-they-have-the-same-value
---
⚡️ Database Tip

Everyone knows the LIMIT clause. But what do you do if you want to have e.g. the employees with the TOP 3 salaries *and* not exclude the 4th or 5th one earning the same as the 3rd? The WITH TIES clause can return more results if the value is the same. Great!