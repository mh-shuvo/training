<?php
use Atova\Eshoper\Foundation\Application;
use Atova\Eshoper\Foundation\Bootstrap\LoadConfiguration;
use Atova\Eshoper\Foundation\Http\Kernel;
use Atova\Eshoper\Foundation\Http\Route;
$app = new Application(PROJECT_PATH);
$kernel = new Kernel($app);
$kernel->handle();