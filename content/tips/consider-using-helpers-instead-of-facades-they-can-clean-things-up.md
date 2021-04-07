---
title: 'Consider using helpers instead of facades. They can clean things up'
tweet_id: '1272826446717870081'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean7QGBXYAEt_l2.jpg'
created_at: 2020-06-16T09:40:47+00:00
slug: consider-using-helpers-instead-of-facades-they-can-clean-things-up
---

This is largely a matter of personal preference, but calling a global function instead of having to import a class and statically call a method feels nicer to me.

Bonus points for session('key') syntax.