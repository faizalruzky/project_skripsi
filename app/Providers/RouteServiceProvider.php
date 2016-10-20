<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
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
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('Http/routes/route-search.php');
            require app_path('Http/routes/route-surahs.php');
            require app_path('Http/routes/route-tafsirs.php');
            require app_path('Http/routes/route-about.php');
            require app_path('Http/routes/admin/route-admin.php');
            require app_path('Http/routes/admin/route-login.php');
            require app_path('Http/routes/admin/route-logout.php');
            require app_path('Http/routes/admin/route-password.php');
            require app_path('Http/routes/admin/route-surahs.php');
            require app_path('Http/routes/admin/route-tafsirs.php');
            require app_path('Http/routes/admin/route-words.php');
            require app_path('Http/routes/admin/route-tfidf.php');
        });

    }
}
