---
title: 'Advanced notifications'
tweet_id: ''
thread_slug: obscure-livewire-tips
author_username: samuelstancl
images:
    - 'https://cln.sh/AAMo0d/download'
created_at: 2021-04-09T17:24:56+02:00
slug: advanced-notifications
---

This trait allows dispatching notifications:
- on the current page
- on the next page (after redirect)
- from any part of your code: you can run Lean::notify() in an action class, a model method, or anywhere else — and it will be sent to the browser
