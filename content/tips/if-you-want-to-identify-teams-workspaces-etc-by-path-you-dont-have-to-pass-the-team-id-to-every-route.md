---
title: 'If you want to identify teams, workspaces, etc by path, you don''t have to pass the team ID to every route'
tweet_id: '1308096302530600963'
thread_slug: 1-rt-1-tip
author_username: samuelstancl
images:
    - 'https://pbs.twimg.com/media/EidKFFnX0AEEjwr.png'
    - 'https://pbs.twimg.com/media/EidKYlkWoAAWkLD.png'
created_at: 2020-09-21T17:30:36+00:00
slug: if-you-want-to-identify-teams-workspaces-etc-by-path-you-dont-have-to-pass-the-team-id-to-every-route
---

In the example below, the value reaches the middleware, where you can do some stuff, and then is REMOVED from the route parameters before being passed to the action.