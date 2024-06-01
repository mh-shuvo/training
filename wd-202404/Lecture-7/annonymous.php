<?php
$productName = "Iphone 15 Pro Max";
/**
 * Annonymous Function
 */
// $product = function()use($productName){
//     return "$productName".PHP_EOL;
// };
// echo $product();

/**
 * Arrow Function
 */

$product = fn() => "$productName";
echo $product();

$calculate = fn($a,$b) => $a+$b;
echo $calculate(5,10);


