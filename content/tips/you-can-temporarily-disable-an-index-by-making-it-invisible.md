---
title: 'You can temporarily disable an index by making it INVISIBLE'
tweet_id: '1596508362643865600'
thread_slug: weekly-thread-2022-35
author_username: tobias_petry
images:
    - 'https://pbs.twimg.com/media/Fcmcb3wWQAELfyk.jpg'
created_at: 2022-11-26T14:17:10+00:00
slug: you-can-temporarily-disable-an-index-by-making-it-invisible
---
⚡️ Database Tip

Deleting an unused index is still a risky operation: If you are wrong (and it is still needed) the database will become slow. Before deleting it, you can make the index invisible first and make it visible again instantly if you still need it.