<?php

function env($key,$default){
    return isset($_ENV[$key]) ? $_ENV[$key] : $default;
}

function config($key,$default=null){
    $container = Atova\Eshoper\Abstract\Container::getInstance();
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