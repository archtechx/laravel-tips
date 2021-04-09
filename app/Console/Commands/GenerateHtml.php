<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Response;
use Illuminate\Routing\RedirectController;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GenerateHtml extends Command
{
    protected $signature = 'html:generate {outdir} {rootUrl}';

    protected $description = 'Generate the static HTML.';

    public Router $router;
    public UrlGenerator $url;

    public function __construct(Router $router, UrlGenerator $url) {
        parent::__construct();

        $this->router = $router;
        $this->url = $url;
    }

    public function handle()
    {
        $outdir = realpath($this->argument('outdir'));

        $this->url->forceRootUrl($this->argument('rootUrl'));

        if (Str::startsWith($this->argument('rootUrl'), 'https')) {
            $this->url->forceScheme('https');
        }

        File::copyDirectory(public_path(), $outdir);

        collect($this->router->getRoutes()->get())
            ->filter(fn (Route $route) => in_array('static', $route->gatherMiddleware()))
            ->values()
            ->each(function (Route $route) use ($outdir) {
                if (! count($route->parameterNames())) {
                    if (! is_dir($path = $outdir . '/' . $route->uri())) {
                        mkdir($path, 0777, true);
                    }

                    File::put($outdir . '/' . $route->uri() . '/index.html', $this->render($route->getAction()['uses']()));
                } else {
                    $model = 'App\\Models\\' . ucfirst($firstParameter = $route->parameterNames()[0]);

                    $root = (string) Str::of($outdir . '/' . $route->uri())->before("{{$firstParameter}}");

                    foreach ($model::cursor() as $instance) {
                        if (! is_dir($path = $root . $instance->getRouteKey())) {
                            mkdir($path, 0777, true);
                        }

                        if (count($route->parameterNames()) === 1) {
                            File::put($path . '/index.html', $this->render($route->getAction()['uses']($instance)));
                        } else { // 2 parameters
                            $datasets = [];

                            foreach ($route->parameterNames() as $parameter) {
                                if ($parameter === $firstParameter) {
                                    continue;
                                }

                                foreach ($instance->{Str::plural($parameter)} as $key => $value) {
                                    $datasets[$key] = [$instance, $key];
                                }
                            }

                            foreach ($datasets as $key => $data) {
                                if (! is_dir($path = $path . '/' . $key)) {
                                    mkdir($path, 0777, true);
                                }

                                File::put($path . '/index.html', $this->render($route->getAction()['uses'](...$data)));
                            }
                        }
                    }
                }
            });

        return 0;
    }

    protected function render ($response) {
        if ($response instanceof RedirectResponse) {
            // Redirect responses shouldn't be rendered with headers
            return $response->getContent();
        }

        if ($response instanceof Renderable) {
            // Views should be rendered using render()
            return $response->render();
        }

        return $response;
    }
}
