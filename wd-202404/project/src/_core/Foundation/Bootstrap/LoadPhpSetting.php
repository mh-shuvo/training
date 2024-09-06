<?php

namespace Bitbyteplay\Wdp\Foundation\Bootstrap;

use Bitbyteplay\Wdp\Contract\BootstrapContract;

class LoadPhpSetting implements BootstrapContract
{
    public function bootstrap($app)
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        mb_internal_encoding('UTF-8');

    }
}