<?php

namespace Atova\Eshoper\Foundation\Bootstrap;

use Atova\Eshoper\Contract\BootstrapContract;
use Atova\Eshoper\Foundation\Application;
use Dotenv\Dotenv;


class LoadEnvironment implements BootstrapContract{

    public function bootstrap(Application $app){
        
        $dotenv = Dotenv::createImmutable(PROJECT_PATH);
        $dotenv->load();
    }

}