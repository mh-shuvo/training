<?php
namespace App\Core\Http;

class Router{

    public static function get($route,$resolve){
        $uri = $_SERVER['REQUEST_URI'];
        $pattern = "~^$route$~";

        if(preg_match($pattern,$uri,$match)){
            $functionArguments = array_slice( $match, 1 );
            
            if(is_callable($resolve)){
                $resolve(...$functionArguments);
            }
            elseif(is_array($resolve)){
                $className = $resolve[0];
                $cls = new $className();
                $cls->{$resolve[1]}(...$functionArguments);

            }else{
                echo "Invalid Argument Passed By the Routes";
            }
        }
    }

}