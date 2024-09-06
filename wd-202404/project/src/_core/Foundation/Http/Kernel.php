<?php

namespace Bitbyteplay\Wdp\Foundation\Http;

use Bitbyteplay\Wdp\Contract\Kernel as HttpKernelContract;
use Bitbyteplay\Wdp\Foundation\Application;
use Bitbyteplay\Wdp\Foundation\Bootstrap\LoadConfiguration;
use Bitbyteplay\Wdp\Foundation\Bootstrap\LoadEnvironment;
use Bitbyteplay\Wdp\Foundation\Bootstrap\LoadPhpSetting;


class Kernel implements HttpKernelContract
{

    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bootstrap()
    {


        foreach ($this->bootstrappers as $bootstrapper) {
            $bootstrapperClass = new $bootstrapper();
            $bootstrapperClass->bootstrap($this->app);
        }
    }

    protected array $bootstrappers = [
        LoadPhpSetting::class,
        LoadEnvironment::class,
        LoadConfiguration::class
    ];

    public function handle()
    {
        try {
            // Bootstrap the application
            $this->bootstrap();

            // Handle the request...
        }
        catch (\Exception $exception){

        }
    }
}