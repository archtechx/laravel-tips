---
title: 'Create model methods for business logic'
tweet_id: '1272822448145272832'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean0WGiWAAAg4cu.jpg'
created_at: 2021-04-06T16:07:25+00:00
slug: create-model-methods-for-business-logic
---

Your controllers should be simple. They should say things like "create invoice for order". They shouldn't be concerned with the details of how your database is structured.

Leave that to the model.