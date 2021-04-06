<?php

namespace App;

use League\CommonMark\GithubFlavoredMarkdownConverter;
use Illuminate\Support\Str;

class MarkdownCompiler
{
    public static function compileMarkdownString(string $expression): string
    {
        return (new GithubFlavoredMarkdownConverter())->convertToHtml($expression);
    }
}
