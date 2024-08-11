<?php

abstract class Vehicle{
    protected $type;
    protected $size;
    protected $color;

    public function __construct($type, $size, $color){
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
    }

    abstract public function start();
    abstract public function stop();
}

class Car extends Vehicle{

    public function __construct($type, $size, $color){
        parent::__construct($type, $size, $color);
    }

    public function start(){
        echo "Car is starting..\n";
    }
    public function stop(){
        echo "Car stopped..\n";
    }
}

trait AroplaneTrait{
    public function start(){
        echo "Weather checking..\n";
        echo "Fuel checking...\n";
        echo "Waiting for the confirmation from ATC\n";
        echo "Flight is started\n";
    }
    public function stop(){
        echo "Weather checking..\n";
        echo "Waiting for the confirmation from ATC\n";
        echo "Get the Route Number\n";
        echo "Flight has been stopped\n";
    }
}
trait CheckAeroplaneEnginee{
    protected function checkEngine(){
        echo "Enginee Checking...\n";
    }
}
class Aeroplane extends Vehicle{

    use AroplaneTrait,CheckAeroplaneEnginee;

    public function __construct($type, $size, $color){
        parent::__construct($type, $size, $color);
        $this->checkEngine();
    }
}

// $bmw = new Car("BMW","Large",'Black');
// $bmw->startCar();

$b787 = new Aeroplane("Boeing","XL","White");
$b787->start();
$b787->stop();






abstract class Test{
    abstract public function testName();
}

/**
 * validate API Key & Password
 * connection Request to the Gateway
 * Call Payment Create API 
 * Payment API
 * 
 * Balance Check
 * Refund
 */

 abstract class AbstractBkash{

    abstract public function payNow();

    abstract public function refundRequest();

    protected function pay(){
        $this->validateAPI();
        $this->getPaymentToken();
        $this->createPayment();
        $this->payment();
        
        echo "Payment Successfull";
        
    }

    protected function refund(){
        $this->validateAPI();
        $this->getPaymentToken();

        echo "Refund Successfull";
    }

    private function validateAPI(){
        // Validate API Key & Password
    }

    private function getPaymentToken(){
        // Get Token to payment
    }

    private function createPayment(){
        // Create payment in gateway
    }

    private function payment(){
        //complete the payment
    }

 }

 class Bkash extends AbstractBkash{

    public function payNow(){
       $this->pay();
    }

   public function refundRequest(){
        $this->refund();
    }

 }