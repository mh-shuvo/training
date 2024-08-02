<?php

/***
 * class className{
 * 
 * }
 */

 // Class initialization
 class Car{
    /***
     * access modifier $propertryName=value
     * Access Modifiers
     * public
     * private
     * protected
     */

     public $color;
     private $engineWiredModel;
     

    public function __construct($eModel="000"){
        $this->engineWiredModel=$eModel;
        echo "I am from the Constructor";  
    }

    public function startEngine(){
        echo "Engine Starting.....<br>";
        $this->connectEngineWired();
        $this->settingColor();
        echo "Engine is started.<br>";
    }

    private function connectEngineWired(){
        echo "Engine Wired ".$this->engineWiredModel." is Connecting.<br>";
    }

    private function settingColor(){
        echo ucfirst($this->color)." color is setting.<br>";
    }

 }

 // Create Object of the class

$bmw = new Car(220);
$bmw->color = "Green";
$bmw->startEngine();


$nissan = new Car(250);
$nissan->color = "Red";
$nissan->startEngine();

//  echo "<pre>";
//  print_r($bmw);

