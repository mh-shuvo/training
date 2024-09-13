<?php
namespace Atova\Eshoper\Foundation\Http;
use Atova\Eshoper\Contract\Http\KernelContract;
use Atova\Eshoper\Foundation\Application;
use Atova\Eshoper\Foundation\Bootstrap\LoadConfiguration;
use Atova\Eshoper\Foundation\Bootstrap\LoadEnvironment;

class Kernel implements KernelContract{

    protected $app;

    protected $bootstrapClasses = [
        LoadEnvironment::class,
        LoadConfiguration::class,
    ];

    public function __construct(Application $app){
        $this->app = $app;
    }


    protected function loadBootstrapFiles(){

        foreach($this->bootstrapClasses as $classPath){
            $class = new $classPath();
            $class->bootstrap($this->app);
        }
    }

    public function handle(){

        $this->loadBootstrapFiles();

    }

}
