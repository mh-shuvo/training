<?php
namespace Atova\Eshoper\Foundation\Http;
use Atova\Eshoper\Contract\Http\KernelContract;
use Atova\Eshoper\Foundation\Application;
use Atova\Eshoper\Foundation\Bootstrap\LoadConfiguration;
use Atova\Eshoper\Foundation\Bootstrap\LoadEnvironment;
use Atova\Eshoper\Foundation\Providers\RouteServiceProvider;
use Atova\Eshoper\Contract\ServiceProviderContract;
class Kernel implements KernelContract{

    protected $app;

    protected array $bootstrapClasses = [
        LoadConfiguration::class,
    ];

    protected array $environmentClasses = [
        LoadEnvironment::class,
    ];

    protected array $middlewareClasses = [];

    protected array $serviceProviderClasses = [
        RouteServiceProvider::class
    ];


    public function __construct(Application $app){
        $this->app = $app;
    }

    protected function loadEnvironment(): void
    {
        foreach ($this->environmentClasses as $classPath) {
            $class = new $classPath();
            $class->bootstrap($this->app);
        }
    }
    protected function loadBootstrapFiles(): void
    {

        foreach($this->bootstrapClasses as $classPath){
            $class = new $classPath();
            $class->bootstrap($this->app);
        }
    }

    protected function loadMiddlewareFiles(): void
    {
        foreach($this->middlewareClasses as $classPath){
            $class = new $classPath();
            $class->middleware($this->app);
        }
    }

    protected function loadServiceProviders(): void{
        foreach($this->serviceProviderClasses as $classPath){
            $this->loadServiceProviderClass(new $classPath());
        }
    }

    protected function loadServiceProviderClass(ServiceProviderContract $provider):void{
        $provider->boot();
}

    public function handle(){
        $this->loadEnvironment();
        $this->loadBootstrapFiles();
        $this->loadServiceProviders();
        $this->loadMiddlewareFiles();

    }

}
