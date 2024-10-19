<?php
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
    $pdo = new PDO("mysql:host=localhost;dbname=lab17", "root");

    foreach ($tables as $table) {
        // Dynamically create the query with the table name
        $query = "
            CREATE TABLE `$table` (
                id int(10) not null AUTO_INCREMENT,
                PRIMARY KEY (`id`)
            )
        ";
        
        // Execute the query
        $stmt = $pdo->exec($query);
    }
    echo "The tales are created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
