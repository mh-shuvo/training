<?php

namespace Bitbyteplay\Wdp\Foundation\Bootstrap;
use Bitbyteplay\Wdp\Contract\BootstrapContract;
use Dotenv\Dotenv;

class LoadEnvironment implements BootstrapContract
{
    public function __construct()
    {

    }
    public function bootstrap($app)
    {
        $dotenv = Dotenv::createImmutable($app->basePath());
        $dotenv->load();
    }
}