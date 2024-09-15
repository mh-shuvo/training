<?php

function env($key,$default){
    return isset($_ENV[$key]) ? $_ENV[$key] : $default;
}

function config($key,$default=null){
    $container = getApplicationContainerInstance();
    $configValues = $container->get("config",[]);

    $keys = explode('.', $key);

    foreach ($keys as $part) {
        if (isset($configValues[$part])) {
            $configValues = $configValues[$part];
        } else {
            return $default;
        }
    }

    return $configValues;
}

function getApplicationContainerInstance(){
    return Atova\Eshoper\Abstract\Container::getInstance();
}


function base_path($path=null)
{
    $container = getApplicationContainerInstance();
    return $container->get("PROJECT_ROOT").'/'.$path;
}

function displayException($exceptionMessage,$code=404){
    echo $exceptionMessage; 
    return;
}


function view($fileName,$data=[]){

    $absoluteFilePath = "views/".$fileName.".php";

    if(!file_exists(base_path($absoluteFilePath))){
       return displayException(sprintf("Views %s not found.",base_path($absoluteFilePath)));
    }

    require_once base_path($absoluteFilePath);
}