<?php

namespace App\Twitter;

class TwitterUser
{
    public function __construct(
        public string $id,
        public string $name,
        public string $username,
        public string $profile_image_url,
    ) {}
}
