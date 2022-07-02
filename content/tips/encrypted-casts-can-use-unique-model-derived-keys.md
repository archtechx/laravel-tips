---
title: 'Encrypted casts can use unique model-derived keys'
tweet_id: '1542863733004767234'
thread_slug: weekly-thread-2022-26
author_username: mattkingshott
images:
    - 'https://pbs.twimg.com/media/FWazRABX0AAps0t.jpg'
created_at: 2022-07-01T13:32:33+00:00
slug: encrypted-casts-can-use-unique-model-derived-keys
---
🔥 #Laravel Tip:

The default encryption cast for Eloquent models uses the app key, making rotation difficult and allowing anyone with key to decrypt all the DB. To address this, consider creating a custom cast that uses the model to create its own unique key.