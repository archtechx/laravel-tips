---
title: 'You can use native PHP functions like `fopen` and `fread` to interact directly with file *streams*'
tweet_id: '1505269897340731395'
thread_slug: weekly-thread-2022-11
author_username: aarondfrancis
images:
    - 'https://pbs.twimg.com/media/FN1LRG-WYAgu4aT.jpg'
created_at: 2022-03-19T19:48:04+00:00
slug: you-can-use-native-php-functions-like-fopen-and-fread-to-interact-directly-with-file-streams
---
One of my favorite things about using S3 in PHP is that you can register a stream wrapper to interact with files.

You can use the native PHP functions like fopen, fread, etc. 

Very helpful when you have massive files you don't want to load into memory! 

(CSVs are a use case.)