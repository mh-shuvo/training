<?php
namespace App\Http\Controller;

class UserController{

    private $userList = [
        "Shuvo",
        "AKhilesh",
        "hasan",
        "Ayman"
    ];
    
    public function index($name){
        echo implode("<br>",$this->userList);
    }

    public function getSingleUser($id){
        if(count($this->userList) > $id){
            $user = $this->userList[$id];
            echo $user;
        }else{
            echo "unknown ID";
        }
    }
        
}