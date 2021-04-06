<?php

namespace App\Twitter;

/**
 * @method string tiny() Get the URL for the tiny size version of the image.
 * @method string small() Get the URL for the small size version of the image.
 * @method string medium() Get the URL for the medium size version of the image.
 * @method string large() Get the URL for the large size version of the image.
 */
class TwitterImage
{
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function __call($size, $args): string
    {
        return $this->url . "?name={$size}";
    }
}
