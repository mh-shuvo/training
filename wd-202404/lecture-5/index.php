<?php

/***
 * 
 * for(initialization; condition; increment/decrement)
 * {
 *  body
 * }
 * 
 */

 /****
  * break
  * continue
  **/

  $search = 5;

  
//  for($i = 1; $i<=10; $i++){
    // if($i%2 != 0){
    //     echo $i;
    // }
    // if($i%2 == 0){
    //     continue;
    //     echo $i.PHP_EOL;
    // }
    // else{
    //     echo $i.PHP_EOL;
    // }
    // echo "END ITEM".PHP_EOL;

    // if($i == 5){
    //     echo "$search is found".PHP_EOL;
    //     break;
    // }
    // echo "END ITEM".PHP_EOL;
//  }

/****
 * initialization
 * while(condition)
 * {
 * body
 * increment/decrement
 * }
 */

// $i = 10;
// while($i>0){
//     echo $i.PHP_EOL;
//     $i--;
// }


/****
 * Input user to search
 * generate a random number. ex: 85
 * then run the loop between 1-85
 * check the search key is exists or not in the range
 */

// $input = readline("Which number you want to search? ");
// $search = (int) $input;

// $range = mt_rand(50,100);


// if($search > $range){
//     echo "Invalid Range";
//     exit;
// }


// $i = 1;

// while($i<= $range){
//     if($search == $i){
//         echo "Number Found";
//     }
//     $i++;
// }

$data = [
    "akhilesh",10,50.5,"Hasan"
];

for ($i=0; $i< 4; $i++){

    if(is_string($data[$i])){
        echo $data[$i].PHP_EOL;
    }
    
}


