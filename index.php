<?php
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Ecommerce site new</title>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
		<!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>


		<!--top starts-->
		<div id="top">
			<div class="container"><!--container starts-->
				<div class="col-md-6 offer"><!--col-md-offer starts-->

					<a href="#" class="btn btn-success btn-sm">Welcome : Guest</a>

					<a href="#" class="">Shopping Cart Total Price: $100, Total Items 2</a>

				</div><!--col-md-6-offer end-->

				<div class="col-md-6"><!--colmd6 starts-->
					<ul class="menu"><!--menu starts-->
						<li><a href="customer_register.php">Register</a></li>
						<li><a href="customer/my_account.php">My Account</a></li>
						<li><a href="cart.php">Go to Cart</a></li>
						<li><a href="checkout.php">Login</a></li>
					</ul><!--menu ends-->
				</div><!--colmd6 ends-->

			</div><!--container end -->
		</div>
		<!--top ends-->



		<!--navbar starts-->
		<div class="navbar navbar-default" id="navbar"><!--navbar navbar-default starts-->
			<div class="container"><!--container starts-->
				
				<div class="navbar-header"><!--navbar-header starts-->
					<a class="navbar-brand home" href="index.php"><!--navbar-brand home starts-->
						<img src="images/logo.png" alt="shoppro logo" class="hidden-xs">
						<img src="images/logo-small.png" alt="shoppro logo" class="visible-xs">
					</a><!--navbar-brand home ends-->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div><!--navbar-header ends-->
				
				<div class="navbar-collapse collapse" id="navigation" ><!--navbar-collapse collapse starts-->
					<div class="padding-nav"><!--padding-nav search starts-->
						<ul class="nav  navbar-nav navbar-left"><!--nav navbar-nav navbar-left starts-->
							<li class="active">
								<a href="index.php"> Home </a>
							</li>
							<li>
								<a href="shop.php"> Shop </a>
							</li>
							<li>
								<a href="customer/my_account.php"> My Account</a>
							</li>
							<li>
								<a href="cart.php"> Shopping Cart</a>
							</li>
							<li>
								<a href="contact.php"> Contact Us</a>
							</li>
						</ul><!--nav navbar-nav navbar-left ends-->
					</div><!--padding-nav search ends-->

					<a class="btn btn-primary navbar-btn right" href="cart.php"><!--btn btn-primary navbar-btn right starts-->
						<i class="fa fa-shopping-cart"></i>
						<span> 4 items in cart</span>
					</a><!--btn btn-primary navbar-btn right ends-->

					<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts-->
						<button class="btn navbar-btn btn-primary right" type="button" data-toggle="collapse" data-target="#search">
							<span class="sr-only">Toggle Search</span>
							<i class="fa fa-search"></i>
						</button>
					</div><!--navbar-collapse collapse right ends-->

					<div class="collapse clearfix" id="search"><!-- collapse clearfix starts-->
						<form class="navbar-form" method="get" action="results.php"> <!-- navbar-form start -->
							<div class="input-group"><!-- input-group starts -->
								<input class="form-control" type="text" placeholder="Search" name="user_query" required>
								<span class="input-group-btn"><!-- input-group-btn Starts-->
									<button type="submit" value="Search" name="search" class="btn btn-primary">
										<i class="fa fa-search"></i>
									</button>
							    </span><!-- input-group-btn Starts-->
							</div><!-- input-group ends -->
						</form><!-- navbar-form ends -->
					</div><!-- collapse clearfix ends-->
				</div><!--navbar-collapse collapse ends-->
			</div><!--container ends-->
		</div><!--navbar navbar-default ends-->
		<!--navbar ends-->
		
		<!--Image Slider starts-->
		<div class="container" id="slider"><!--container starts-->
			<div class="col-md-12">
				<div class="carousel slide" id="myCarousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<?php 
							$get_slides = "select * from slider LIMIT 0,1";
							$run_slides = mysqli_query($con, $get_slides);
							while($row_slides = mysqli_fetch_array($run_slides)){
								$slide_name = $row_slides['slide_name'];
								$slide_image = $row_slides['slide_image'];
								echo "
								<div class='item active'>
									<img src='admin_area/slides_images/$slide_image'>
								</div>
								";
							}
						?>
						<?php 
							$get_slides = "select * from slider LIMIT 1,3";
							$run_slides = mysqli_query($con, $get_slides);
							while($row_slides = mysqli_fetch_array($run_slides)){
								$slide_name = $row_slides['slide_name'];
								$slide_image = $row_slides['slide_image'];
								echo "
								<div class='item'>
									<img src='admin_area/slides_images/$slide_image'>
								</div>
								";
							}
						?>
					</div>

					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>
			</div>
		</div><!--container ends-->
		<!--Image Slider ends-->

		<!--text below slider starts-->
		<div id="advantages"><!--advantages starts-->
			<div class="container">
				<div class="same-height-row">
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-heart"></i>
							</div>
							<h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
							<p>We are known to provide best possible servivce ever</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-tags"></i>
							</div>
							<h3><a href="#"> BEST PRICES </a></h3>
							<p>You can check on all others sites about the prices and than compare with us.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box same-height">
							<div class="icon">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<h3><a href="#"> 100% SATISFACTION GUARANTEED </a></h3>
							<p>Free return on everything for 3 months.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!--advantages ends-->
		<!--text below slider ends-->

		<!--products starts-->
		<div id="hot"><!--hot starts-->
			<div class="box">
				<div class="container">
					<div class="col-md-12">
						<h2>Latest this week</h2>
					</div>
				</div>
			</div>
		</div><!--hot ends-->

		<div id="content" class="container"><!-- Container starts-->
			<div class="row"><!--row starts-->
				<?php
					getPro();
				?>
			</div><!--row ends-->
		</div><!-- Container ends-->

		<!--Include footer starts-->
		<?php include("includes/footer.php"); ?>
		<!--Include footer ends-->

<!--javascript files link-->
		<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>