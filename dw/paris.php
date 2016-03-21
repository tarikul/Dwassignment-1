<?php
include("config.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Product</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>	
	<script src="js/Tahoma_400-Tahoma_700.font.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>		
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<div class="shell">
			<!-- Header -->
			<div id="header">
				<!-- Logo -->
				<h1><a title="home" href="#"><i>GlobalStyling</i></a></h1>
				<!-- Navigation -->
				<div id="navigation">
					<ul>
						<li><a title="Home" href="home.php">Home<span></span></a></li>
						<li><a title="Product" href="product.php">Product<span></span></a></li>
						<li><a title="Registration" href="registration/register.php">Registration<span></span></a></li>
						<li><a title=" login" href="login/login.php">login<span></span></a></li>
					</ul>
				</div>
				<!-- END Navigation -->
				<div class="cl"></div>
				<div id="cart">
					<p><a title="" href="#"></a></p>
				</div>
			</div>	
		</div>
		<!-- END Header -->
		<!-- Main -->
		<div id="main">
			<!-- Slider Holder -->
			<div id="slider-holder">
				<div class="shell">
					<!-- Main Slider -->
					<div id="slider">
						<a title="Details" class="main-button" href="#"></a>					
						<ul>
							<li>
								<img src="css/images/506.png" alt="#" />
								<div class="caption">
									<h2><a title= "Welcome to the London Hair Company" href="home.html"><u>Welcome to the London Hair Company.</u></a></h2>
									<p>Established over 12 years ago, The GlobalStyling Hair salon is THE place to go for everything to do with hair.Our previous salon was famous for its great atmosphere and superb stylists’. We might have changed to all new fixtures and fittings in a new location but we still have the same stylists ready to create magic with your hair and of course the same friendly warm atmosphere. </p>
								</div>
								<div class="cl"></div>
							</li>
							<li>
								<img src="css/images/507.png" alt="#" />
								<div class="caption">
									<h2><a title="What’s new!" href="home.html">What’s new!</a> </h2>									
									<p>BOOK ONLINE - with our live booking system. Its instant confirmation and you can book when it suits you! Try it today by clicking on the link to the right.</p>
								</div>
								<div class="cl"></div>
							</li>
							<li>
								<img src="css/images/508.png" alt="#" />
								<div class="caption">
									<h2><a title="For our new customers" href="home.html">For our new customers</a></h2>
									<p>The GlobalStyling Hair Salon Company is rated a 5 star salon by the good salon guide. Take a look at our salon profile for more information about the new salon or go straight to our services and products to see what we can do for you.Our brand new salon is light, airy and full of the latest technology for your comfort and guaranteed satisfaction. Our stylists are all fully trained and experienced and ready to create their magic with your hair. </p>
								</div>
								<div class="cl"></div>
							</li>
						</ul>											
					</div>
					<!-- END Main Slider -->								
				</div>	
			</div>
			<!-- END Slider Holder -->
			<!-- Featured Items -->
			<div class="items">
				<div class="shell">
					<h4>Product</h4>
					<div class="shop-by">
						<ul>
							<li>Country:</li>
							<li><a title="London" href="london.php">London</a></li>
							<li><a title="Paris" href="paris.php">Paris</a></li>
							<li><a title="New York" href="newyork.php">New York</a></li>							
						</ul>		
					</div>
					<!-- Products -->
					<div class="products">
					<?php
					
						$result=mysql_query("select * from product where state='paris' ");
						while($row=mysql_fetch_array($result)){
							$content = $row['image'];
								
								$price=$row['price']*1.39;
								
									 
						
					
					?>
						<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="registration/appointment.php?id=<?php echo $row['id']; ?>">Order now</a>
								<div class="img-holder">
										
									<a title="Order now" href="#"><img src="login/upload/<?php echo $row['image'];?>" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>   	
									<p class="price"><span class="dollar">&#8364;</span><?php echo $price ;?><sup></sup></p>
								</div>
								<div class="product-entry">
									<p class="model"><?php echo $row['person'];?><br />Hairstyle</p>
									<p class="model"><span>product: <?php echo $row['id'];?></span></p>
									<p class="product-info"><?php echo $row['product_info'];?></p>
								</div>
							</div>
						</div>
						
						<?php
						}
						
						?>
						
						
						
						<div class="cl"></div>
					</div>
					<!-- END Products -->
				</div>
			</div>
			<!-- END Featured Items -->
			<!-- Bestsellers -->				
			<div class="columns">
				<div class="shell">
					<div class="post">
						<div class="col about">
							<p class="heading">Address</p>
							<p>151 Shirley Road, Croydon, Surrey, CR0 8SS</p>							
						</div>
						<div class="col categories">
							<p class="heading">Product</p>
							<ul>
								<li><a title="London" href="london.php">London</a></li>
								<li><a title="Paris" href="paris.php">Paris</a></li>
								<li><a title="New York" href="newyork.php">New York</a></li>						
							</ul>
						</div>
						<div class="col info">
							<p class="heading">Contact us</p>
							<ul class="first">
								<li><a title="Telephone" href="#">Telephone: 020 8662 1666 </a></li>
								<li><a title="Email Address" href="#">Email:info@londonhaircompany.co.uk </a></li>														
							</ul>							
						</div>
						<div class="cl"></div>
					</div>						
				</div>					
			</div>			
		</div>
		<!-- END Main  -->
		<div id="footer-push"></div>
	</div>
	<!-- END Wrapper -->
	<!-- Footer -->
	<div id="footer">
		<div class="shell">
			<div></div>
			<p></p>
			<div class="cl"></div>
		</div>
	</div>
	<!-- END Footer -->
</body>	
</html>