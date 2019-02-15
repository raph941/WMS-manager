
<!DOCTYPE html>
<html>
<head>
	<title>WMS Management system</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	
</head>
<body style="background-image: url(images/bg_33.png)">
	<div class="container-fluid">

		<div class="topper">
			<a href="home.html">			
					<img src="images/WMS.jpg" class="img-responsive" id="pic">
			</a>

			</div>

		<div style="padding-bottom: 20px;">
			Admin Login
		</div>

  		<div class="nav col-sm-12 col-lg-12 col-md-12 col-xs-12">
  			<div class="dropdown animated pulse dropdown_button " style="margin-right: 20px;" >
  				
  				<button class="dropdown-toggle btn btn-default  " data-toggle="dropdown"><img src="images/users.png">
				</button>
					<ul class="dropdown-menu">
						<li><a href="useraccounts.html">User Accounts</a></li>
		
						
						
						
						
						
					</ul>
			</div>

			<div class="dropdown animated pulse dropdown_button animated bounce" style="float: left; margin-right: 20px;">
  				<button class="dropdown-toggle btn btn-default " data-toggle="dropdown"><img src="images/addstock.png"> 
				</button>
					<ul class="dropdown-menu">
						<li><a href="#">Add Item</a></li>
						
						
						<li><a href="available_stock.php">Available Stock Item</a></li>
						
						
						
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
						<li><a href="invoice.html">Create Invoice</a></li>
						
						
						
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

		<div >
			<h1 style="">Welcome to the Wms Dashboard</h1>
			<h4 >Enjoy our numerous feautures</h4>

			<div class="col-6" style="border: 1px solid white; background: #5d5977; padding: 20px; border-radius: 10px; ">
				 <a href="add_item.html" ><h4 style="color: rgb(198, 200, 214); padding-bottom: 20px; font-size: 2rem;">	Add Items	</h4></a> 
				<p style="color: white;">Click on the add items menu to insert new/existing stock items into the warehouse.
				this option gives you the flexibility, to add items, with changeable prices,
				Quantity and price.
				</p>
			</div>
			<div class="col-6" style="border: 1px solid white; background: #5d5977; padding: 20px; border-radius: 10px; ">
					<a href="add_item.html" ><h4 style="color: rgb(198, 200, 214); padding-bottom: 20px; font-size: 2rem;">	Available Items	</h4></a> 
				   <p style="color: white;">Click on the Available stock menu, to show you your database. it shows you
					   all the items that has been inputed into the database. it shows you the amount of items in the store, as well as their 
					   relative quantities and the prices.
				   </p>
			</div>
			<div class="col-6" style="border: 1px solid white; background: #5d5977; padding: 20px; border-radius: 10px; ">
					<a href="add_item.html" ><h4 style="color: rgb(198, 200, 214); padding-bottom: 20px; font-size: 2rem;">	User Accounts	</h4></a> 
				   <p style="color: white;">The user account menu, displays the users such that the user details can be retrieved
					   and modified, according to the desire of the administrator
				   </p>
			</div>
			<div class="col-6" style="border: 1px solid white; background: #5d5977; padding: 20px; border-radius: 10px; ">
					<a href="add_item.html" ><h4 style="color: rgb(198, 200, 214); padding-bottom: 20px; font-size: 2rem;">	Create Invoice	</h4></a> 
				   <p style="color: white;">The create invoice menu elements, helps to create transactions. the invoice is created when a 
					   transaction is to be made. the invoice containes the destination of the goods, the description of the goods, the prices... 
				   </p>
			   </div>

		</div>


	














	</div>	

	<script type="text/javascript" src="js/jquery-1.8.2.min.js">
	</script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>