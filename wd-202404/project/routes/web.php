<?php
use Atova\Eshoper\Foundation\Http\Route;
Route::get("/",function (){
    return view("home",['name'=>"Shuvo"]);
});
