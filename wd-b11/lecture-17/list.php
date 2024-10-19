<?php
$products = [];
try{
$pdo = new PDO("mysql:host=localhost;dbname=lab17","root");

// $name = "Macbook";
// $price = 100;


// $query = "SELECT * FROM `products` WHERE `product_name`=:name AND `price`=:price";

$query = "SELECT * FROM `products` ORDER BY `id` DESC";

$stmt = $pdo->prepare($query);
// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":price",$price);


// $query = "SELECT * FROM `products` WHERE `product_name`='$name' AND `price`=$price;";

$result = $stmt->execute();
if($result){
    $products = $stmt->fetchAll();
}


}catch(PDOException $e){
    die("Something went wrong with Database. The Error is: ".$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <p style="color:green;text-align:center">
        <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?>
    </p>
    <h1 style="text-align: center;">
        Product List
    </h1>
    <table border="1" width="100%">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php
                foreach($products as $product){
            ?>
            <tr>
                <td><?php echo $product['id'];?></td>
                <td><?=$product['product_name']?></td>
                <td><?=$product['price']?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>
</html>