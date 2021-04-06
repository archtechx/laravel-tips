---
title: 'Consider single-action controllers'
tweet_id: '1272826438891298816'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean6Sn9XkAA-WKS.png'
created_at: 2021-04-06T16:07:34+00:00
slug: consider-single-action-controllers
---

If you have a complex route action, consider moving it to a separate controller.

For OrderController::create, you'd create CreateOrderController.

Another solution is to move that logic to an action class — do what works best in your case.