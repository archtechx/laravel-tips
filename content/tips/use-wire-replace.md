---
title: 'Use wire:replace'
tweet_id: '1380542122105921536'
thread_slug: obscure-livewire-tips
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/EyirvPAWQAIN6ib.jpg'
created_at: 2021-04-09T16:11:56+02:00
slug: use-wire-replace
---

As you know, Livewire sometimes runs into painful DOM diffing issues. They can usually be solved with simple workarounds, but sometimes those workarounds get quite complex.

So I built a package that adds a `wire:replace` directive, telling Livewire to replace an entire chunk of the DOM, instead of trying to diff individual changes.
