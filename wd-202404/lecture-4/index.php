<?php
/**
 * Array Initialization
 * With array();
 * With [];
 */

 $names = array("Mehedi","Hasan");
 $data = [10,15.5,true];

/**
 * From dimensional perpective
 * Single Dimensional
 * Multi dimensional
 * 
 * Indexed based array
 * Key based array
 */



 $names[5] = "Yousuf";
// echo array_push($names,"Yosuf");
/**
 * array_push() return the total number of element in array after pushing the new element
 */

 $totalNames = count($names);
 echo $totalNames.PHP_EOL;

//  unset($names[$totalNames -1]);

echo array_pop($names).PHP_EOL;

/***
 * array_pop()
 * get the last item form the given array which is Yousuf
 * Ge the index by the value Yousuf
 * call unset($names[index])
 */

 $commonArray = [
    "name" => "Hasan",
    "roll" => 773907
 ];

//  $commonArray['name'] = "SHuvo";

 print_r($names);
 print_r($data);
 print_r($commonArray);
 echo $data[1].PHP_EOL;



