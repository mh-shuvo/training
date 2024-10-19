<?php

$host = "localhost";
$username = "root";
$password = null;


// Mysqli procedural

// @ $connection = mysqli_connect($host,$username,$password);
// if(!$connection){
//     die("Connection Failed".mysqli_connect_error());
// }


// MySQLi oop

// @ $connection = new mysqli($host,$username,$password);
// if($connection->connect_error){
//     die("Connection Failed".$connection->connect_error);
// }
// $connection->close();


// PDO PHP Data Object

try{
    $connection = new PDO("mysql:host=$host;dbname=lab17",$username,$password);
    
    // $sql = "CREATE TABLE `products` (
    //     id int(10) not null AUTO_INCREMENT,
    //     product_name varchar(100) not null,
    //     price float(8,2) default 0,
    //     PRIMARY KEY (`id`)
    // )";


    // $sql = "SHOW TABLES;";
    
    if($_POST){
        $data = $_POST;
        $name = $data['product_name'];
        $price = $data['price'];
        $sql="
        INSERT INTO `products` (`product_name`, `price`) VALUES
    ( '$name', $price)
        ";
    
        $data = $connection->exec($sql);
        echo "<pre>";
        // echo("Product Successfully Added with ID: ".$connection->lastInsertId());
        $msg = "Product Successfully Added with ID: ".$connection->lastInsertId();
        header("Location:list.php?msg=$msg");
    }
    

    
    // if($isSuccess){
    //     echo "Successfull database created";
    // }

}catch(PDOException $e){
    die("Failed ".$e->getMessage());
}


