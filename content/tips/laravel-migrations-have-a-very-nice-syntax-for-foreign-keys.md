---
title: 'Laravel migrations have a very nice syntax for foreign keys'
tweet_id: '1308126491188883463'
thread_slug: 1-rt-1-tip
author_username: samuelstancl
images: {  }
created_at: 2021-04-06T16:07:46+00:00
slug: laravel-migrations-have-a-very-nice-syntax-for-foreign-keys
---

I didn't know about this for so long.

Instead of:
$table-&gt;unsignedBigInteger('user_id');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users');

You do:
$table-&gt;foreignId('user_id')-&gt;constrained();