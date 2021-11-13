---
title: 'Use the --requests flag when creating models to also create form requests'
tweet_id: '1459206741703356419'
thread_slug: weekly-thread-2021-45
author_username: taylorotwell
images:
    - 'https://pbs.twimg.com/media/FDxOtKdWYAUmMwr.jpg'
created_at: 2021-11-12T17:09:32+00:00
slug: use-the-requests-flag-when-creating-models-to-also-create-form-requests
---
This release of Laravel also includes a "--requests" flag when making models via Artisan. This option will create a "Store{Model}Request" and "Update{Model}Request" form request + update the controller to use those requests on their respective methods. 🔥

Thanks @PovilasKorop!