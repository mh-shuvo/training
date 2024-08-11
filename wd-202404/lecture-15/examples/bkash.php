<?php

abstract class AbstractBkash{
    
    private $api;
    protected function __construct( $api){
        $this->api = $api;
    }

    protected function getApi(){
        return $this->api;
    }
}

class Bkash extends AbstractBkash{
    public function __construct( $api ){
        parent::__construct( $api );
    }

    public function checkApiUrl(){
        return $this->getApi();
    }
}

$obj = new Bkash("sandbox.bkash.com");
echo $obj->checkApiUrl();

