---
title: 'When a relationship is already loaded and "cached" on the model instance, you''ll have to refresh it'
tweet_id: '1308084124947820554'
thread_slug: 1-rt-1-tip
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Eic_JawXgAAEbYL.png'
created_at: 2020-09-21T16:42:13+00:00
slug: when-a-relationship-is-already-loaded-and-cached-on-the-model-instance-youll-have-to-refresh-it
---

`$domain->refresh();` to refresh its attributes

`$tenant->load('primary_domain');` to update the `primary_domain` relationship on the $tenant instance
