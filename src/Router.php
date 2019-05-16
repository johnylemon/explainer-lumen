<?php

namespace Lemon\ExplainerLumen;

use Laravel\Lumen\Routing\Router as LumenRouter;
use Lemon\Explainer\Explainer;

class Router extends LumenRouter
{
    protected $last_route = NULL;

    public function explain(string $classname = NULL)
    {
        if (!app()->runningInConsole())
            return $this;

        if($classname)
        {
            Explainer::register([
                'method' => $this->last_route['method'],
                'uri' => $this->last_route['uri'],
            ], $classname);
        }

        return $this;
    }

    public function addRoute($method, $uri, $action)
    {
        $snapshot = $this->routes;

        parent::addRoute(...func_get_args());

        $this->keepLastRoute($snapshot);
    }

    protected function keepLastRoute($snapshot)
    {
        $this->last_route = collect($this->routes)->diffKeys($snapshot)->first();
    }
}
