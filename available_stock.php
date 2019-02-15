<!DOCTYPE html>
<html>
<head>
	<title>Available stock</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table{
			
			padding: 5px;
		}
	</style>
	

	
</head>
<body >
	
	<div class="container-fluid">

			<div class="topper">
			<a href="home.html">			
					<img src="images/WMS.jpg" class="img-responsive" id="pic">
			</a>

			</div>

  		<div class="nav col-sm-12 col-lg-12 col-md-12 col-xs-12">
  			<div class="dropdown animated pulse dropdown_button " style="margin-right: 20px;" >
  				
  				<button class="dropdown-toggle btn btn-default  " data-toggle="dropdown"><img src="images/users.png">
				</button>
					<ul class="dropdown-menu">
						<li><a href="useraccounts.html">User Accounts</a></li>
						<li><a href="#">Manage User</a></li>
						<li><a href="#">Add User</a></li>
						
						
						
						
					</ul>
			</div>

			<div class="dropdown animated pulse dropdown_button animated bounce" style="float: left; margin-right: 20px;">
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/addstock.png"> 
				</button>
					<ul class="dropdown-menu">
						<li><a href="add_item.html">Add Item</a></li>
						
						
						<li><a href="available_stock.php">Available Stock Item</a></li>
						
						
						
					</ul>
			</div>
			
			<div class="dropdown animated pulse dropdown_button animated bounce" style="margin-right: 20px;" >
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/available.png">
				</button>
					<ul class="dropdown-menu">
						<li><a href="#">Incomeing Stock</a></li>
						<li><a href="#">Outgoing Stock</a></li>
						
						
						
					</ul>
			</div>

			<div class="dropdown animated pulse dropdown_button animated bounce" style="margin-right: 20px;" >
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/report.png"> 
				</button>
					<ul class="dropdown-menu">
						<li><a href="#">Sotck Item Report</a></li>
						
						
						
					</ul>
			</div>


			<div class="dropdown animated pulse dropdown_button animated bounce" style="margin-right: 20px;">
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/invoice.png">
				</button>
					<ul class="dropdown-menu">
						<li><a href="#">Create Invoice</a></li>
						<li><a href="#">Edit Invoice</a></li>
						<li><a href="#">View Invoices</a></li>
						
						
					</ul>
			</div>

		
			<div class="dropdown animated pulse dropdown_button animated bounce" style="margin-right: 20px;">
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/tools.png">
				</button>
					<ul class="dropdown-menu">
						<li><a href="#">Help</a></li>
						<li><a href="#">Calculator</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>

						
						
					</ul>
			</div>

		</div>
		</div>

			
		
		
		<div class="available_stock_field col-12">
				<?php

$server='localhost';
$user = 'root';
$password = '';
$database = 'wms';

$conn = mysqli_connect($server, $user, $password, $database);
$str = "select item_name, quantity, price from add_item";

$qry = mysqli_query($conn, $str);

?>
<table border="1px solid black" class="col-12" >
	<tr>
		<th  style="font-size:20px; padding: 10px; padding-right:20px; color:#1a0000;">item_name</th>
		<th style="font-size:20px; padding: 10px; padding-right:20px; color:#1a0000;">quantity</th>
		<th style="font-size:20px; padding: 10px; padding-right:20px; color:#1a0000;">Price</th>
		
	</tr>
	


<?php

while ($rs=mysqli_fetch_array($qry)) {
	
	

	print "<tr>
	
	<td> <input  value=".$rs['item_name']." > </td>
	<td> <input  value=".$rs['quantity']."> </td>
	<td> <input  value=".$rs['price']." > </td>
	</tr>";
}

?>
</table><br><br><br><br><br><br><br><br><br><br>


<button class="btn btn-success col-2" type="submit" name="submit">Update</button>
<a href="add_item.html">
<button class="btn btn-success col-2"  name="submit">Add Items</button>
</a>


	

		</div>
	
	  
	
	</div>




 


	<script type="text/javascript" src="js/jquery-1.8.2.min.js">
	</script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>