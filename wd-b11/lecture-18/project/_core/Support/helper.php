<?php

function base_path($path=null){

    return PROJECT_ROOT."/".$path; 
}

function getConfig($key,$default=null){
    $keyArr = explode(".",$key); 

    if(count($keyArr) == 1 || is_null($key)){
        return $default;
    }

    $config = new Atova\Eshoper\Foundation\Config($keyArr[0]);
    return $config->get($keyArr[1]) ?? $default;
}

function view($view,$data=[]){
    $viewFilePath = base_path("views/".str_replace(".","/",$view).".php");
    if(file_exists($viewFilePath)){
        require_once $viewFilePath;
        return true;
    }
    throwViewNotFoundException(sprintf("[%s] view not found",$viewFilePath));
}

function throwViewNotFoundException($msg){
    throw new Exception($msg);
    exit;
}

function asset($file){
    $absoluteFilePath = URLROOT.'/'.$file;
    return $absoluteFilePath;
}