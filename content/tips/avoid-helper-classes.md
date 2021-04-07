---
title: 'Avoid helper *classes*'
tweet_id: '1272822458563821568'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean2CnyWoAEZ3Ef.jpg'
created_at: 2020-06-16T09:24:56+00:00
slug: avoid-helper-classes
---

Sometimes people put helpers into a class.

Beware, it can get messy. This is a class with only static methods used as helper functions. It's usually better to put these methods into classes with related logic or just keep them as global functions.