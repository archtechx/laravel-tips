---
title: 'There''s great value in understanding how object state of Models works. This is mostly relevant in (Feature) tests because they touch many parts of your codebase in one PHP/Laravel App state'
tweet_id: '1308082893865005068'
thread_slug: 1-rt-1-tip
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/Eic9xP2XsAoo8ay.png'
created_at: 2021-04-06T16:07:40+00:00
slug: theres-great-value-in-understanding-how-object-state-of-models-works-this-is-mostly-relevant-in-feature-tests-because-they-touch-many-parts-of-your-codebase-in-one-phplaravel-app-state
---

For example, use $model-&gt;is($anotherModel) to check if they refer to the same row.