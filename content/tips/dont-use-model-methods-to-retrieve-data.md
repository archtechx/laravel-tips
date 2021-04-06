---
title: 'Don''t use model methods to retrieve data'
tweet_id: '1272826433417752576'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean58GjWAAAgqLq.jpg'
created_at: 2021-04-06T16:07:32+00:00
slug: dont-use-model-methods-to-retrieve-data
---

If you want to retrieve some data from a model, create an accessor.

Keep methods for things that *change* the model in some way.