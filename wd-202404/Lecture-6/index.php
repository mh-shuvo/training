<?php
// Basic function syntax
/**
 * function definition
 * function function_name(params){
 * //function body
 * }
 * 
 * function calling 
 * function_name(value)
 */

 $msg = "Hello John! How are you?";


 function sayHi($name="Mehedi"){
    echo "Hi $name!".PHP_EOL;
 }

 sayHi("John");
 sayHi();


 function updateGlobalScopeVar(&$value){ 
    $value = "Bangaldesh";
 }

 updateGlobalScopeVar($msg);
 echo $msg.PHP_EOL;

function outer(){
    echo "This is Outer function".PHP_EOL;

    function inner(){
        echo "This is Inner function".PHP_EOL;
    }
    inner();

 }

 outer();


 function getInfo(string $email,string $name="Hasan",int $phone=017){
    echo <<<INFO
        Name: $name,
        Email: $email,
        Phone: $phone
INFO;
echo PHP_EOL;
 }

getInfo(name:"Hasan",email:"shuvo@asl.aero",phone:"0171");

function getResult($title,int ...$values){
    $sum = 0;
    foreach($values as $v){
        $sum += $v;
    }
    echo $sum.PHP_EOL;
}
$items = [1,2,3,5,5,7,897,67];
getResult(...$items);
