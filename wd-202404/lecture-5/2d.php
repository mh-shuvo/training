<?php
$data = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16]
    ];

// for($row = 0; $row<4;$row++){

//     for($col = 0; $col < 4; $col++){
//         echo $data[$row][$col]."\t";
//     }
//     echo "\n";

// }
foreach($data as $key => $item){
    foreach($item as $key1 => $col){
        echo "[$key] [$key1] = $col \t";
    }
    echo "\n";
}