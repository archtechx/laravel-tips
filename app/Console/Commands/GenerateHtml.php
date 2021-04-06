<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\RedirectController;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateHtml extends Command
{
    protected $signature = 'html:generate {outdir} {rootUrl}';

    protected $description = 'Generate the static HTML.';

    public function __construct(
        public Router $router,
        public UrlGenerator $url,
    ) {
        parent::__construct();
    }

    public function handle()
    {
        $outdir = realpath($this->argument('outdir'));

        $this->url->forceRootUrl($this->argument('rootUrl'));

        File::copyDirectory(public_path(), $outdir);

        collect($this->router->getRoutes()->get())
            ->filter(fn (Route $route) => in_array('static', $route->gatherMiddleware()))
            ->values()
            ->each(function (Route $route) use ($outdir) {
                if (! count($route->parameterNames())) {
                    if ($route->getActionName() === '\\' . RedirectController::class) {
                        // $action = $this->router->match('get', $route->defaults['destination'])->getAction();
                        // Redirects don't work yet
                        $action = $route->getAction();
                    } else {
                        $action = $route->getAction();
                    }

                    if (! is_dir($path = $outdir . '/' . $route->uri())) {
                        mkdir($path, 0777, true);
                    }

                    File::put($outdir . '/' . $route->uri() . '/index.html', $this->render($action['uses']()));
                } else {
                    $model = 'App\\Models\\' . ucfirst($parameter = $route->parameterNames()[0]);

                    $root = (string) Str::of($outdir . '/' . $route->uri())->before("{{$parameter}}");

                    foreach ($model::cursor() as $instance) {
                        if (! is_dir($path = $root . $instance->getRouteKey())) {
                            mkdir($path, 0777, true);
                        }

                        File::put($path . '/index.html', $this->render($route->getAction()['uses']($instance)));
                    }
                }
            });

        return 0;
    }

    protected function render ($response) {
        if ($response instanceof Renderable) {
            return $response->render();
        }

        return $response;
    }
}
