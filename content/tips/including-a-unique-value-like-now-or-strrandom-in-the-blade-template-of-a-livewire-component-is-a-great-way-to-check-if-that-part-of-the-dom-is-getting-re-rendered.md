---
title: 'Including a unique value, like now() or Str::random(), in the Blade template of a Livewire component is a great way to check if that part of the DOM is getting re-rendered'
tweet_id: '1461703833617272840'
thread_slug: weekly-thread-2021-46
author_username: alexjgarrett
images:
    - 'https://pbs.twimg.com/media/FEWOM0UXsAQyJ89.jpg'
created_at: 2021-11-19T14:32:05+00:00
slug: including-a-unique-value-like-now-or-strrandom-in-the-blade-template-of-a-livewire-component-is-a-great-way-to-check-if-that-part-of-the-dom-is-getting-re-rendered
---
A quick and easy way to check if @LaravelLivewire components are re-rendering when you don't want/need them to.

Add now() or now()-&gt;timestamp to your component template. The time value will increment if there's a re-render side effect!