<?php
use App\Core\Http\Router;
use App\Http\Controller\UserController;

Router::get("/",function(){
    include("./views/home.php");
});

Router::get("/user",[UserController::class,'index']);
Router::post("/user",[UserController::class,"store"]);
Router::get("/user/(\w+)/get",[UserController::class,'getSingleUser']);

Router::notFound();