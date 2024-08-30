<?php
use App\Core\Http\Router;
use App\Http\Controller\UserController;

Router::get("/",function(){
    echo "Hello World";
});

Router::get("/user",[UserController::class,'index']);
Router::get("/user/(\w+)/get",[UserController::class,'getSingleUser']);
