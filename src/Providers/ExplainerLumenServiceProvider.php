<?php

namespace Lemon\ExplainerLumen\Providers;

use Lemon\Explainer\Providers\ExplainerServiceProvider;

use Lemon\Explainer\Explainer;

class ExplainerLumenServiceProvider extends ExplainerServiceProvider
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
        $this->app->router->group([], function ($router) {
            require __DIR__.'/../../routes/routes.php';
        });

        parent::boot();
    }
}
