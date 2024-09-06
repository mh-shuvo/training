<?php

namespace Bitbyteplay\Wdp\Foundation\Bootstrap;

use Bitbyteplay\Wdp\Contract\BootstrapContract;

class LoadConfiguration implements BootstrapContract
{
    public function bootstrap($app)
    {
        $config = [];

        echo $app->getConfigurationPath();

        // Load all the configuration files from the config directory
        foreach ($this->getConfigurationFiles($app) as $key => $path) {
            $config[$key] = require $path;

        }
        $app->bind("config",$config);

        date_default_timezone_set(config('app.timezone'));


    }

    private function getConfigurationFiles($app)
    {
        $files = [];

        foreach (glob($app->getConfigurationPath() . '/*.php') as $file) {
            $files[basename($file, '.php')] = $file;
        }

        return $files;
    }
}