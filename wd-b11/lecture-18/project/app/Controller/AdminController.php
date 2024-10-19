<?php
namespace App\Controller;

class AdminController{

    public function index(){
        return view("admin.index");
    }

    public function login(){
        return view("admin.login");
    }

}