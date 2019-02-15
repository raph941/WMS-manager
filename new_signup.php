
<?php


$server = 'localhost';
$user = 'root';
$password = '';
$database = 'wms';
$conn= mysqli_connect($server,$user,$password,$database);



$full_name = $_POST['full_name'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$username = $_POST['username'];
$signup_as = $_POST['signup_as'];

$str = "insert into signup_info(full_name, password, phone_number, email, username, signup_as) 
values('$full_name', '$password', '$phone_number', '$email', '$username', '$signup_as' )";
$out = "select * from add_item";
$qny= mysqli_query($conn,$str);

header("location:login.html");





?>




