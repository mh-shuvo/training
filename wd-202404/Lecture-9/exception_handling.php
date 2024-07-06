<?php


try{
    throw new Exception("User Not Found");
}catch(Exception $e){
    echo $e->getMessage();
}

echo "Hello World";


