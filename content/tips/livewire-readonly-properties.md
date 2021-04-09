---
title: 'Readonly properties'
tweet_id: ''
thread_slug: obscure-livewire-tips
author_username: samuelstancl
images:
    - 'https://cln.sh/oG5FqU/download'
created_at: 2021-04-09T17:28:56+02:00
slug: livewire-readonly-properties
---

They're a great way to make your components safer and faster.

Say you have a component for editing some resource.

You enforce the ACL in mount().

But if the user could change the currently edited resource, you'd need to enforce ACL on *all* requests!
