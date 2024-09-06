<?php

namespace Bitbyteplay\Wdp\Contract;

interface Kernel
{
    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap();


    public function handle();
}