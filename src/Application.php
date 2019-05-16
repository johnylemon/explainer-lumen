<?php

namespace Lemon\ExplainerLumen;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{
    public function bootstrapRouter()
    {
        $this->router = new Router($this);
    }
}
