---
title: 'MySQL has a blackhole store engine'
tweet_id: '1484566725597138944'
thread_slug: weekly-thread-2022-03
author_username: fideloper
images:
    - 'https://pbs.twimg.com/media/FJklJacX0AIsUP1.jpg'
created_at: 2022-01-21T16:41:03+00:00
slug: mysql-has-a-blackhole-store-engine
---
👨‍🔬 Cool MySQL hack: 

🧐 If your staging env has a table that ideally doesn't have data in it (esp production data)

🕳 You can make it a BLACKHOLE table

😅 I used this to make sure a table with a list of emails to send never contains any rows. Because, you know....