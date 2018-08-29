
<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Shoppro | Ecommerce site</title>
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
						<li><a href="checkout.php">My Account</a></li>
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
							<li>
								<a href="index.php"> Home </a>
							</li>
							<li class="active">
								<a href="shop.php"> Shop </a>
							</li>
							<li>
								<a href="checkout.php"> My Account</a>
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

		<!---->
		<div id="content"><!--content starts-->
			<div class="container">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li>Shop</li>
						</ul>
					</div>

					<div class="col-md-3">
						<?php include("includes/sidebar.php");?>
					</div>
					<!--image slider starts-->
					<div class="col-md-9">
						<div class="row" id="productMain">
							<div class="col-sm-6">
								<div id="mainImage">
									<div class="carousel slide" id="myCarousel" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
										</ol>

										<div class="carousel-inner">
											<div class="item active">
												<img src="admin_area/product_images/product.jpg">
											</div>
											<div class="item">
												<img src="admin_area/product_images/product2.jpg">
											</div>
											<div class="item">
												<img src="admin_area/product_images/product3.jpg">
											</div>
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
							</div>
							<!--image slider ends-->
							<div class="col-sm-6">
								<div class="box">
									<h1 class="text-center"> MARVEL Black Kids POLO T-Shirt </h1>
									<form action="details.php" method="post" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-5 control-label"> Product Quantity </label>
											<div class="col-md-7">
												<select name="product_qty" class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-5 control-label"> Product Size </label>
											<div class="col-md-7">
												<select name="product_size" class="form-control">
													<option>Select a Size</option>
													<option>Small</option>
													<option>Medium</option>
													<option>Large</option>
												</select>											
											</div>
										</div>

										<p class="price"> $50 </p>
										<p class="text-center buttons">
											<button class="btn btn-primary" type="submit">
												<i class="fa fa-shopping-cart"></i> Add to Cart
											</button>
										</p>

									</form>
								</div>

								<div class="row" id="thumbs">
									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/product.jpg" class="img-responsive">
										</a>
									</div>

									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/product2.jpg" class="img-responsive">
										</a>
									</div>

									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/product3.jpg" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="box" id="details">
							<p>
								<h4>Product Details</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
								<h4>Size</h4>
								<ul>
									<li>Small</li>
									<li>Medium</li>
									<li>Large</li>
								</ul>
							</p>
							<hr>
						</div>

						<div class="row same-height-row">
							<div class="col-md-3 col-sm-6">
								<div class="box same-height headline">
									<h3 class="text-center"> You also like these Products</h3>
								</div>
							</div>
							<div class="center-responsive col-md-3 col-sm-6">
								<div class="product same-height">
									<a href="details.php">
										<img src="admin_area/product_images/product.jpg" class="img-responsive">
									</a>
									<div class="text">
										<h3> <a href="details.php"> MARVEL Black Kids POLO T-Shirt </a> </h3>
										<p class="price">$50</p>
									</div>
								</div>
							</div>

							<div class="center-responsive col-md-3 col-sm-6">
								<div class="product same-height">
									<a href="details.php">
										<img src="admin_area/product_images/product.jpg" class="img-responsive">
									</a>
									<div class="text">
										<h3> <a href="details.php"> MARVEL Black Kids POLO T-Shirt </a> </h3>
										<p class="price">$50</p>
									</div>
								</div>
							</div>

							<div class="center-responsive col-md-3 col-sm-6">
								<div class="product same-height">
									<a href="details.php">
										<img src="admin_area/product_images/product.jpg" class="img-responsive">
									</a>
									<div class="text">
										<h3> <a href="details.php"> MARVEL Black Kids POLO T-Shirt </a> </h3>
										<p class="price">$50</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--content ends-->

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