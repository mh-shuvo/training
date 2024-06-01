<?php
function demoCallback($some){
    if(is_callable($some)){
        $some();
    }else{
        echo $some;
    }
}

$storeFunction = function(){
    echo "I am from Callback".PHP_EOL;
};
$storeFunction();

// demoCallback($storeFunction);
demoCallback("Anonther String".PHP_EOL);


function sayHi($name,$honour){
    echo "Hello $honour $name. How are you?".PHP_EOL;
}


$functionName = "sayHi";


if(function_exists($functionName)){
    call_user_func($functionName,"Mehedi","MR.");
}else{
    echo "Not Exists";
}