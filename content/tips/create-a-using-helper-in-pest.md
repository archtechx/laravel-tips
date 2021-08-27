---
title: 'Another pest tip: Create a using() helper to get perfect IDE support on $this calls inside your tests'
tweet_id: '1426219050250772482'
thread_slug: 'Pest Tips'
author_username: archtechx
images:
    - 'https://pbs.twimg.com/media/E8ryqTuWEAQT-1H.jpg'
created_at: 2021-08-16T19:07:26+02:00
slug: create-a-using-helper-in-pest
---

Out of the box, @pestphp has amazing IDE support for the expect()-&gt;toBe() syntax, but sometimes you need to use $this — usually for things like HTTP calls.
