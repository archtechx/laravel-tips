<?php

namespace App\Providers;

use App\MarkdownCompiler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        Blade::directive('markdown', function (string $expression = '') {
            if ($expression) {
                return MarkdownCompiler::compileMarkdownString($expression);
            }

            return '<?php $__markdownOldBuffer = ob_get_clean(); ob_start(); ?>';
        });

        Blade::directive('endmarkdown', function () {
            return '<?php $__markdownString = ob_get_clean(); ob_start(); echo $__markdownOldBuffer; unset($__markdownOldBuffer); echo \App\MarkdownCompiler::compileMarkdownString($__markdownString); unset($__markdownString); ?>';
        });

    }
}
