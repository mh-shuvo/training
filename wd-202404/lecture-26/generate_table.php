<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbName = "lab26";

$con=null;
try {
    $con = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    echo "Connected\n";
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

$tables = [
    'customers',
    'suppliers',
    'categories',
    'inventories',
    'orders',
    'order_details',
    'districts',
    'areas',
    'wishlists',
    'reviews'
];



try {
    
    foreach ($tables as $table) {
        $tableCreate = "
            CREATE TABLE `$table` (
                `id` int(10) NOT NULL AUTO_INCREMENT,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
        );
        ";

        $con->exec($tableCreate);
        
    }

} catch (Exception $exception) {
    echo $exception->getMessage();
}