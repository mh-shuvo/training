<?php


class Vehicle{
    protected $type;
    protected $size;
    protected $color;

    public function __construct($type, $size, $color){
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
    }
    public function start(){
        echo "Vehicle is started\n";
    }
    public function stop(){
        echo "Vehicle has been stopped\n";
    }
}

class Car extends Vehicle{

    public function __construct($type, $size, $color){
        parent::__construct($type, $size, $color);
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






