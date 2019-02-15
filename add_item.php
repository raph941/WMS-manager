<?php


$server = 'localhost';
$user = 'root';
$password = '';
$database = 'wms';
$conn= mysqli_connect($server,$user,$password,$database);

$item_name = $_POST['item_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$str = "insert into add_item(item_name, quantity, price) values('$item_name', '$quantity', '$price')";
$out = "select * from add_item";
$qny= mysqli_query($conn,$str);

header("location:available_stock.php");



?>



