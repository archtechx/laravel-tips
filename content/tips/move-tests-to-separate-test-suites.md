---
title: 'Move tests to separate test suites'
tweet_id: '1495414937757253636'
thread_slug: weekly-thread-2022-07
author_username: JackEllis
images:
    - 'https://pbs.twimg.com/media/FLVuSJRVQAEQffe.jpg'
created_at: 2022-02-20T15:07:59+00:00
slug: move-tests-to-separate-test-suites
---
My Laravel tip of the day. If you're running slow tests that need to hit a third party API, you can break them out of your Features directory and put them in a dedicated test suite (e.g. External). Then you can run "phpunit --testsuite Feature", and your External tests won't run.