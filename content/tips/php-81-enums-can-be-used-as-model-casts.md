---
title: 'PHP 8.1 enums can be used as model casts'
tweet_id: '1479467948985126913'
thread_slug: weekly-thread-2022-01
author_username: ryangjchandler
images:
    - 'https://pbs.twimg.com/media/FIRla1cX0AUpxGS.jpg'
created_at: 2022-01-07T15:00:20+00:00
slug: php-81-enums-can-be-used-as-model-casts
---
🔥 Did you know that @laravelphp can cast model columns into instances an enum in PHP 8.1?

The example below will create an instance of `OrderStatus` based on variant value. If the `status` column has the value `shipped`, it will return the `OrderStatus::Shipped` variant.
