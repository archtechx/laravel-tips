---
title: 'Don''t use a controller namespace'
tweet_id: '1272826437167468544'
thread_slug: laravel-clean-code-tactics
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Ean6NFJX0AAfiXT.png'
created_at: 2021-04-06T16:07:33+00:00
slug: dont-use-a-controller-namespace
---

Instead of writing controller actions like PostController@index, use the callable array syntax [PostController::class, 'index'].

You will be able to navigate to the class by clicking PostController.