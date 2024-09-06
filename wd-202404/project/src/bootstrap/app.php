<?php

use Bitbyteplay\Wdp\Foundation\Application;
use Bitbyteplay\Wdp\Foundation\Http\Kernel;

$app = new Application(PROJECT_PATH);
$kernel = new Kernel($app);
$kernel->handle();
