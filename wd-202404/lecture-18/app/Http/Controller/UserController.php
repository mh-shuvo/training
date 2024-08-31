<?php
namespace App\Http\Controller;

class UserController{

    private $userList = [
        "Shuvo",
        "AKhilesh",
        "hasan",
        "Ayman"
    ];
    
    public function index(){
        // echo implode("<br>",$this->userList);
        include("./views/userlist.php");
    }

    public function getSingleUser($id){
        if(count($this->userList) > $id){
            $user = $this->userList[$id];
            echo $user;
        }else{
            echo "unknown ID";
        }
    }

    public function store(){
        echo "The user successfully stored.";
    }
        
}