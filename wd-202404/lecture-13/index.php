<?php

class Sample{
    public $name;
    private $role;
    public static $hasStatic="Yes";

    // public function getDetails(){
    //     $data = sprintf("Name: %s\nRole: %s\n",$this->name,$this->role);
    //     return $data;
    // }

    public function setName($value){
        $this->name = $value;
    }

    public function setRole($value){
        $this->role = $value;
    }

    public function __call($methodName,$args){
       
    }

    public static function __callStatic($methodName,$args){
       
    }

    public function __get($property){
        return $this->{$property};
    }

    

    public function __set($property,$value){
        $this->{$property} = $value;
    }

    public static function getClassName(){
        echo __CLASS__;
    }

    public function __invoke(){
        echo "I am invoking";
        // when try to use object of the class as function
    }

    public function __toString(){
        // when try to print the object of the class by echo
        $data = sprintf("Name: %s\nRole: %s\n",$this->name,$this->role);
        return $data;
    }

}


class PrintSomething{

    public function __invoke(){
        echo "I am printing.";
    }

}

class Person{
    private $name;
    private $age;
    private $profession;
    private static $salary;
    const NATIONALITY="BANGLADESHI";

    public function __toString(){
        return sprintf("Name: %s\nAge: %s\nProfession: %s\nNATIONALITY:%s",$this->name,$this->age,$this->profession,self::NATIONALITY);
    }

    public function __set($property,$value){
        $this->{$property} = $value;
    }

    public static function getSalary(){
        echo self::$salary;
    }

}




enum OrderStatus:String{
    case PENDING = "pending";
    case DELIVERED = "delivered";
}

if(OrderStatus::PENDING->value == "pending"){
    echo "Yes";
}else{
    echo "No";
}




// $obj = new Sample();
// $obj->setName("Hasan");
// $obj->setRole("Senior Manager");
// echo $obj->getDetails();
// echo $obj;
// $obj->getMethod(10,20,50,30);
// $obj->fullName = "Shuvo";
// echo $obj->fullName;
// Sample::getDetails();
// echo Sample::$hasStatic;


// $ps = new PrintSomething();
// echo $ps;

$person = new Person();
$person->name = "Hasan";
$person->age  = 30;
$person->profession = "CS Engineer";

echo $person;

Person::getSalary();