<?php

namespace Bitbyteplay\Wdp\Foundation;
use Bitbyteplay\Wdp\Abstract\Container;
class Application extends Container
{
    protected $basePath = null;


    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
        $this->registerBaseBindings();
    }


    private function setBasePath(mixed $basePath): void
    {
        $this->basePath = $basePath;
    }

    public function basePath()
    {
        return $this->basePath;
    }
    public function getConfigurationPath($path = ''): string
    {
        // Return the path to the config directory
        return $this->basePath.DIRECTORY_SEPARATOR.'config'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    protected function registerBaseBindings()
    {

        static::setInstance($this);

    }


}