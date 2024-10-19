<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbName = "lab26";


// $con = mysqli_connect($servername,$username,$password,$dbName);

// if(!$con){
//     echo mysqli_connect_error();
//     exit;
// }


// $con = new mysqli($servername,$username,$password,$dbName);

// if($con->connect_error){
//     echo "Failed to Connect: ".$con->connect_error;
// }

$con=null;
try {
    $con = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    echo "Connected";
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

echo "\n";

$query = "SHOW TABLES;";

$result = $con->query($query);
// $result->fetch
/**
 * fetch_assoc
 * fetch_all
 * fetch_array
 */

 print_r($result->fetchAll(PDO::FETCH_ASSOC));
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row["Database"]."\n";
}

