---
title: 'Use $appends to include properties in the array representation of your model'
tweet_id: '1461703842026770438'
thread_slug: weekly-thread-2021-46
author_username: xiCO2k
images:
    - 'https://pbs.twimg.com/media/FEO04rDXsAAQx6i.jpg'
created_at: 2021-11-19T14:32:07+00:00
slug: use-appends-to-include-properties-in-the-array-representation-of-your-model
---
Had to revisit a #Laravel project from 3 years ago, and found out I did append a mutator in the toArray method 😂, there is no need for that, we can use the "$appends" and it does the same job ✅