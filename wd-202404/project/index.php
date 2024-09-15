<?php
define("PROJECT_PATH",__DIR__);

if(file_exists(PROJECT_PATH."/storage/framework/maintenance.php")){
    require PROJECT_PATH."/storage/framework/maintenance.php";
    return;
}


require "./vendor/autoload.php";

require "./bootstrap/app.php";