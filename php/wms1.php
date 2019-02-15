<?php
	$server='localhost';
	$user='root';
	$password='';
	$database= 'dbtest';
	$conn=mysqli_connect('localhost','root','','dbtest');
	
	$name=$_POST['name'];
	$number=$_POST['number'];
	$quantity=$_POST['quantity'];
	$description=$_POST['description'];
	$amount=$_POST['amount'];
	
		$str="insert into wms(name,number,quantity,description,amount)
		values('$name','$number','$quantity','$description','$amount')";
		$qry=mysqli_query($conn,$str);
			if(!$qry){
				mysql_error("an error occurred on submission");
			}
			else{
				header('location:home.html');
			}
?>