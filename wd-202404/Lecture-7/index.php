<?php 
echo "======================= Function(Part-2) =======================".PHP_EOL;

// function calculate($a,$b,$operator):mixed{
//     $result = "No Result";
//     switch($operator){
//         case "+":
//            $result = $a+$b;
//             break;
//         case "-":
//             $result = $a-$b;
//             break;
//         case "*":
//             $result = $a*$b;
//             break;
//         case "/":
//             $result = $a/$b;
//             break;
//         default:
//         $result =  "Undefined operator [".$operator."]";
//     }
//     return $result.PHP_EOL;
    
// }

// echo calculate(10,5,"+");

// echo calculate(10,5,"-");
// echo calculate(10,5,"%");

function getArray():array{
    return [10,5,2];
}

[$a,$b,$c] = getArray();
// $firstElement = $elements[0];
// $secondElement = $elements[1];
// $thirdElement = $elements[2];
echo $b;