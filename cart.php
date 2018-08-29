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
						<li><a href="customer/my_account.php"">My Account</a></li>
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
							<li>
								<a href="shop.php"> Shop </a>
							</li>
							<li>
								<a href="customer/my_account.php""> My Account</a>
							</li>
							<li class="active">
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
						<li>Cart</li>
					</ul>
				</div>
				<div class="col-md-9" id="cart">
					<div class="box">
						<form action="cart.php" method="post" enctype="multipart-form-data">
							<h1> Shopping Cart</h1>
							<p class="text-muted"> You currently have 3 items in your cart. </p>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th colspan="2"> Product</th>
												<th>Quantity</th>
												<th>Unit Price</th>
												<th>Size</th>
												<th colspan="1"> Delete</th>
												<th colspan="2">Sub Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<img src="admin_area/product_images/product.jpg">
												</td>
												<td>
													<a href="#"> MARVEL Black Kids POLO T-Shirt </a>
												</td>
												<td>
													2
												</td>
												<td>
													$50.00
												</td>
												<td>
													Large
												</td>
												<td>
													<input type="checkbox" name="remove[]">
												</td>
												<td>
													$100.00
												</td>
											</tr>

											<tr>
												<td>
													<img src="admin_area/product_images/product.jpg">
												</td>
												<td>
													<a href="#"> MARVEL Black Kids POLO T-Shirt </a>
												</td>
												<td>
													2
												</td>
												<td>
													$50.00
												</td>
												<td>
													Large
												</td>
												<td>
													<input type="checkbox" name="remove[]">
												</td>
												<td>
													$100.00
												</td>
											</tr>

											<tr>
												<td>
													<img src="admin_area/product_images/product.jpg">
												</td>
												<td>
													<a href="#"> MARVEL Black Kids POLO T-Shirt </a>
												</td>
												<td>
													2
												</td>
												<td>
													$50.00
												</td>
												<td>
													Large
												</td>
												<td>
													<input type="checkbox" name="remove[]">
												</td>
												<td>
													$100.00
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="5"> Total </th>
												<th colspan="2"> $100 </th>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="box-footer">
									<div class="pull-left">
										<a href="index.php" class="btn btn-default">
											<i class="fa fa-chevron-left"></i> Continue Shopping
										</a>
									</div>
									<div class="pull-right">
											<button class="btn btn-default" type="submit" name="update" value="Update Cart">
												<i class="fa fa-refresh"></i> Update Cart
											</button>
											<a href="checkout.php" class="btn btn-primary">
												Proceed to Checkout <i class="fa fa-chevron-right"></i>
											</a>
									</div>
								</div>
						</form>
					</div>
					<!--you may also like starts-->
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
						<!--you may also like ends-->
				</div><!--col-md-9 ends-->
				<!---->
				<div class="col-md-3"><!-- col-md-3 starts -->
					<div class="box" id="order summary"><!--order summary box starts-->
						<div class="box-header">
							<h3> Order Summary</h3>
						</div>
						<p class="text-muted">
							Shipping and additional costs are calculated based on the values you have entered.
						</p>
						<div class="table-responsive"><!--table-responsive starts-->
							<table class="table">
								<tbody>
									<tr>
										<td> Order Subtotal</td>
										<th> $ 200.00 </th>
									</tr>
									<tr>
										<td> Shipping and handling </td>
										<td> $0.00 </td>
									</tr>	
									<tr>
										<td> Tax </td>
										<th> $0.00 </th>
									</tr>
									<tr class="total">
										<td>Total</td>
										<th> $200.00 </th>
									</tr>	
								</tbody>
							</table>
						</div><!--table-responsive ends-->
					</div><!--order summary box starts-->
				</div><!-- col-md-3 ends -->
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
