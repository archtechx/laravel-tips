---
title: 'Comparing changes on ''saving'' using:'
tweet_id: '1308113281018728450'
thread_slug: 1-rt-1-tip
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/EidZs1IWAAUgH0m.png'
created_at: 2020-09-21T18:38:04+00:00
slug: comparing-changes-on-saving-using
---

$model-&gt;getOriginal()

in Eloquent event listeners can be very useful.

One such use case is checking whether an order is locked. If it is, the only write action we permit is unlocking it. Only then can changes be made.