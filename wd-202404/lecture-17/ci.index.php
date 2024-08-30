<?php
$params = $_GET;

$query = array_key_exists('q',$params) ? $params['q'] : "home";


switch($query){
    case "home":
        include('home.php');
        break;
    case "chq":
        include('checkout.php');
        break;
    case "shp":
        include('shop.php');
        break;
    
    default:
       throw new Exception("404 Not found");
}

$url = "http://localhost/user/101";
$url = "http://localhost/?q=user&id=101";


echo "<a href='./'>Home</a><br>";
echo "<a href='./?q=shp'>Shop</a><br>";
echo "<a href='./?q=chq'>Checkout</a><br>";
