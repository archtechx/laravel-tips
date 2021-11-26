---
title: 'You can implement the ShouldBeEncrypted interface on your jobs to encrypt their payload before they get pushed to the queue'
tweet_id: '1464247629030703108'
thread_slug: weekly-thread-2021-47
author_username: pascalbaljet
images:
    - 'https://pbs.twimg.com/media/FEyahMTXoAAv8gH.jpg'
created_at: 2021-11-26T15:00:13+00:00
slug: you-can-implement-the-shouldbeencrypted-interface-on-your-jobs-to-encrypt-their-payload-before-they-get-pushed-to-the-queue
---
💡 Since @laravelphp v8.19, there is a ShouldBeEncrypted interface that jobs can implement. This encrypts the payload, for example, in case the properties hold sensitive data. 

As of v8.25, this works for Listeners, Mailables, and Notifications as well 💫

#Laravel #PHP #webdev  https://twitter.com/pascalbaljet/status/1462711618329055232