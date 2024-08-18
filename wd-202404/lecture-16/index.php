<?php

require "./vendor/autoload.php";


$fw = new Acme\Log\Writer\File_Writer();
$cus = new Food\Order\Customer();

var_dump($fw);
var_dump($cus);

getAppName();

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();



// include "order/customer.php";
// include "payment/customer.php";

// spl_autoload_register(function($className){
//     include "./app/$className.php";
// });

// use Food\Order\Customer;

// $oc = new Customer();
// $oc1 = new Customer();
// $oc2 = new Customer();
// $oc3 = new Customer();

// $pc = new Food\Payment\Customer();

// $dt = new DateTime();

// $delivery = new Delivery();
// $payment = new Payment();
// $site = new Site();