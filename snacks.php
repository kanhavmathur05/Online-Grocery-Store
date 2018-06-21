<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
if($_SESSION["user_id"]=="")
{
	header("Location:login.php");
}
else
{
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Groceries :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.php">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php"> Create Account </a></li>
					<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">User<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<li><a href="login.php">Login</a></li><br>
														<li><a href="logout.php">Logout</a></li>
													</ul>
												</div>	
												
											</div>
										</ul>
					</li>
					<li><a href="contact.php">Help</a></li>
					<li><a href="cart.php"><img src="images/cart.png" style="width: 30px; height: 30px;">Cart</a></li>		
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">super Market</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="fruitsnveg.php" class="act">Fruits &<br>Vegetables</a></li>	
									<li class="active"><a href="foodgrains.php" class="act">Foodgrains, Oils <br>& Masala</a></li>	
									<li class="active"><a href="backery.php" class="act">Bakery, Cakes <br>& Dairy</a></li>	
									<li class="active"><a href="beverages.php" class="act">Beverages</a></li>	
									<li class="active"><a href="snacks.php" class="act">Snacks & <br>Branded Foods</a></li>	
									<li class="active"><a href="btynhygeine.php" class="act">Beauty &<br>Hygeine</a></li>	
									<li class="active"><a href="household.php" class="act">Cleaning &<br>Household</a></li>	
									<li class="active"><a href="kitchen.php" class="act">Kitchen, Garden <br>& Pets</a></li><!-- Mega Menu -->
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Snacks & Branded Foods</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- groceries--> 
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fruits And Vegetables</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cuts & Sprouts</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flowers</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Herbs & Seasonings</a></li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Vegetables</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>International Vegetables</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Fruits & Vegetables</a></li>
							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Grocery & Staples</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dals & Pulses</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dry Fruits</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Edible Oils & Ghee</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flours & Sooji</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Masalas & Spices</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Staples</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Rice & Rice Products</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Salt, Sugar & Jaggery</a></li>
							</ul>
						<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>PersonalCare</a></li>
							<ul>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Baby Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cosmetics</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Deos & Perfumes</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Skin Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sanitary Needs</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Oral Care</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Personal Hygiene</a> </li>
								<li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Shaving Needs</a></li>
							</ul>
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						
						<?php
	    									$conn=mysqli_connect("localhost","root","","EGroceryStore1");
											if($conn==false)
											{
												die("Error: Could not connect to database.".mysqli_connect_error());
											}
											$sql="SELECT * FROM Products WHERE category_name='Snacks & Branded Foods'";
											$result=$conn->query($sql);
											if($result->num_rows>0)
											{
												while($row=$result->fetch_assoc())
											{
											?>
				<div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
											
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<!--<form action="single.php?action=sendsingle&product_id=<?php //echo $row["product_id"]?>">
												</form>-->
												<a href="single.php?action=sendsingle&product_id=<?php echo $row["product_id"]?>" type="submit" target="_blank"><?php echo "<img src='GroceryStoreAdmin/ProductImages/".$row['product_image']."'width=232 height=200>"; ?></a>	
												
												<p><?php echo "Product Name:".$row["product_name"]; ?></p>
												<h4><?php echo "Price:".$row["price"]; ?></h4>
												
											</div>
											<div class="snipcart-details top_brand_home_details">
													<form action="cart.php?action=add&id=<?php echo $row["product_id"] ?>&product_name=<?php echo $row["product_name"]?>&price=<?php echo $row["price"] ?>&product_image=<?php echo $row["product_image"] ?>" method="post">
							
													<fieldset>
														
														<input type="submit" name="add_to_cart" value="Add to cart" class="button">
													</fieldset>
													</form>					
											</div>
										</div>
									
									</figure>
								</div>

							</div>
							
							
						</div>

					</div>
				</div>
				<?php
										}
									}
									else
									{
										echo "0 Results";
									}
									?>
						<div class="clearfix"> </div>
					</div>
				</div>
						<div class="clearfix"> </div>
				</div><!--<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- groceries --->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.php">Short Codes</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.php">FAQ's</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.php">Groceries</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.php">Household</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.php">Personal Care</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.php">Packaged Foods</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.php">Beverages</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.php">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>
					</ul>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Super Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>