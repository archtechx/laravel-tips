---
title: 'Advanced trait design'
tweet_id: ''
thread_slug: obscure-livewire-tips
author_username: samuelstancl
images:
    - 'https://cln.sh/YjzF2w/download'
created_at: 2021-04-09T17:23:56+02:00
slug: advanced-trait-design
---

Let's look at the same trait again. It does two interesting things.

1. Livewire::listen() is superior to hydrate* and dehydrate* when you need access to specific parts of the lifecycle

2. The `instanceof self` check scopes the listener to the component
