<?php

namespace App\Twitter;

class TwitterUser
{
    public string $id;
    public string $name;
    public string $username;
    public string $profile_image_url;

    public function __construct(
        string $id,
        string $name,
        string $username,
        string $profile_image_url,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->profile_image_url = $profile_image_url;
    }
}
