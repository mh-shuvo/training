<?php

define('PROJECT_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require 'vendor/autoload.php';
const PROJECT_PATH = __DIR__;

require 'bootstrap/app.php';

echo config('app.name');

