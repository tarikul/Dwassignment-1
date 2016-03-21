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
					
						$result=mysql_query("select * from product where state='london' ");
						while($row=mysql_fetch_array($result)){
							$content = $row['image'];

								
									 
						
					
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
									<p class="price"><span class="dollar">$</span><?php echo $row['price'];?><sup>.99</sup></p>
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
						
						
						<!--<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="#">Order now</a>
								<div class="img-holder">	
									<a title="Order now" href="#"><img src="css/images/103.jpg" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">$</span>129<sup>.99</sup></p>
								</div>
								<div class="product-entry">
									<p class="model">Men <br />Hairstyle</p>
									<p class="model"><span>product: 02</span></p>
									<p class="product-info">Men in this picture had very rough messy long hairs which also dye in a brown blonde mix shade. It’s a very attractive and unique hairstyle of this year.</p>
								</div>
							</div>
						</div>
						<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="#">Order now</a>
								<div class="img-holder">	
									<a title="Order now" href="#"><img src="css/images/102.jpg" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">$</span>249<sup>.99</sup></p>
								</div>
								<div class="product-entry">
									<p class="model">Men<br /> Hairstyle</p>
									<p class="model"><span>product: 03</span></p>
									<p class="product-info">In 2013, the best trendy hair cut for men’s is the half-shaved style. Half shaved is best for these summers and also very easy to handle or carry anywhere. It is also a very trendy style among boys.</p>
								</div>
							</div>
						</div>
						<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="#">Order now</a>
								<div class="img-holder">	
									<a title="Order now" href="#"><img src="css/images/201.jpg" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">$</span>99<sup>.99</sup></p>
								</div>
								<div class="product-entry">
									<p class="model">Women<br />Hairstyle</p>
									<p class="model"><span>product: 04</span></p>
									<p class="product-info"> Following the footsteps of many celebrities, renowned models and influential media personalities, millions of new-generation fashionistas are getting smitten by the incredible benefits of artificial hair extension these days. Incredible popularity of artificial hair extension has caused the international glamour world to get flooded with many brands of hair extension and hair styling options. The artificial hair extension is certainly great for getting instant long, thick, beautiful celebrity-like hair.</p>
								</div>
							</div>
						</div>
						<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="#">Order now</a>
								<div class="img-holder">	
									<a title="Order now" href="#"><img src="css/images/202.jpg" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">$</span>199<sup>.99</sup></p>
								</div>
								<div class="product-entry">
									<p class="model">Women<br /> Hairstyle</p>
									<p class="model"><span>product: 05</span></p>
									<p class="product-info">When you want to exude a powerful look, you have to dress your face accordingly. This is what a power couple of sunglasses and lipstick looks like: You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni Crème Colour Classic Lip Duo to ramp up that look every now and then. Don’t forget to carry that smile and please groom your eyebrows!</p>
								</div>
							</div>
						</div>
						<div class="product-frame">
							<div class="product">
								<a title="Order now" class="view-button" href="#">Order now</a>
								<div class="img-holder">	
									<a title="Order now" href="#"><img src="css/images/203.jpg" alt="Images of sunglasses" /></a>
								</div>								
								<div class="img-bottom"></div>
								<div class="price-box">
									<p>price</p>
									<p class="price"><span class="dollar">$</span>284<sup>.99</sup></p>
								</div>
								<div class="product-entry">
									<p class="model">Women<br /> Hairstyle</p>
									<p class="model"><span>product: 06</span></p>
									<p class="product-info">For women with curly, wavy or textured hair, another fashionable style option for 2012 is the messy shag cut like the one sported by fashionista Alexa Chung. This kind of cut is chopped straight around the head just below the chin. This cut should be styled naturally, with loose, air-dryed curls and waves, rather than flat-ironed or straightened tresses. This easy, breezy haircut is one of the most current styles for 2012 – 2013, and it can be worn by both young, hip women and more mature women who favor a casual, natural look. </p>
								</div>
							</div>
						</div>-->
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