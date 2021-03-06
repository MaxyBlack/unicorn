<?php

namespace Unicorn\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteServiceProvider
 * @package Unicorn\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Unicorn\Http\Controllers';

    /**
     * @var array
     */
    protected $routeGroups = [
        'frontend' => [
            'path' => 'Frontend.php',
        ],
        'backend'  => [
            'path' => 'Backend.php',
        ],
        'api'      => [
            'path' => 'Api.php',
        ],
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        if (env('APP_ENV') == 'local') {
            $this->routeGroups['dev'] = [
                'path' => 'Dev.php',
            ];
        }

        $this->mapWebRoutes($router);

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            foreach ($this->routeGroups as $key => $routeGroup) {
                $this->registerRouteGroup($router, $routeGroup);
            }
        });
    }

    /**
     * @param Router $router
     * @param $group
     */
    protected function registerRouteGroup(Router $router, $group)
    {
        /*
         * @TODO
         *
         * implement events
         * */
        require app_path('Http/Routes/' . $group['path']);
    }
}
