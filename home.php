

<!DOCTYPE html>
<html>
<head>
	<title>WMS Management system</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/hamburgers.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	
</head>
<body style="background-image: url(images/bg_33.png)">
	<div class="container-fluid " >

		<?php include 'navbar/navbar.php' ;?>
			

	<div class="hero_section col-12 " style="background-color: #dad6e2; height: 350px;" >
				
				<h1 style="position: relative; padding-top: 100px; text-align: center; color:#767684;
				font-weight: 100; font-weight: bold;" class="animated fadeInUp">Need an Efficient way <br></h1>

				<h3 style="position: relative; padding-top: 30px; text-align: center; color:#767684;
				font-weight: 100; font-weight: 500;" class="animated fadeInUp">To manage your warehouse? <br> 
				<a class="btn btn-success animated bounce" href="login.php" style="margin-top: 30px; align-content: center; position: relative;">
						Check It Out
					</a></h3>
				
				
			</div>

		<div style="position: relative; padding-top: 30px;" class="col-12">
			<img src="images/wms1.jpg " class="img-circle  col-sm-4 col-11 animated pulse" style="padding: 10px;">
			<img src="images/wms2.jpg " class="img-circle col-sm-4 col-11 animated pulse"  style="padding: 10px;">
			<img src="images/wms3.png " class="img-circle col-sm-4 col-11 animated pulse"  style="padding: 10px;">

			<div class="feautures col-12">
					<p class="feauture_txt">Feautures</p>
				<div>
					<img src="images/one.png" style="padding: 30px;"><br>
					<p class="feauture_caption">Easy Input and Out put of Goods into the Warehouse
						<br>
						Just a click of your keyboard.
						
					</p>
				</div>
				<div>
						<img src="images/two(1).png" style="padding: 30px;"><br>
						<p class="feauture_caption">Easy Input and Out put of Goods into the Warehouse
							<br>
							Just a click of your keyboard.
							
						</p>
					</div>
				<div>
					<img src="images/three.png" style="padding: 30px;"><br>
					<p class="feauture_caption">Easy Input and Out put of Goods into the Warehouse
						<br>
						Just a click of your keyboard.
								
					</p>
				</div>
		    </div>

		</div>

		<div class="footer col-12 " style="background-color: #dad6e2; height: 100px; margin-top: 100px;">
			<a href="aboutus.html" style="font-size: 1.3em; color:#767684; font-weight: bold;">About Us</a><br>
			<a href="#" style="font-size: 1.3em; color:#767684;font-weight: bold;">Contact Us</a>
			<p>&copy; All right reserved. designed by group 1 </p>
		</div>
	
</div>		

	<script>
		var hamburger = document.querySelector(".hamburger");
		hamburger.addEventListener("click", function () {
			hamburger.classList.toggle("is-active");
			
		})
	</script>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js">
	</script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

