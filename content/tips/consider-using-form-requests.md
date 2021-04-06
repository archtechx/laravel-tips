---
title: 'Consider using form requests'
tweet_id: '1272822452201144321'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean0kWgXgAAcOXm.jpg'
created_at: 2021-04-06T16:07:26+00:00
slug: consider-using-form-requests
---

They're a great place to hide complex validation logic.

But beware of exactly that — hiding things. When your validation logic is simple, there's nothing wrong with doing it in the controller. Moving it to a form request makes it less explicit