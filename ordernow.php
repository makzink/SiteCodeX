<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Kazmik Khan">
	<meta name="description" content="A website for Kazmik's Kitchen">
	<meta name="keywords" content="Kazmik, kazmik, khan, kazmik's kitchen, kitchen, tasty food">
	<title>Kazmik's Kitchen - Order Now</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style_01.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.js"></script>
</head>
<body>

<header class="wrap clearfix" role='banner' itemscope itemtype='https://schema.org/WPHeader'>
	
<div class="logo_title">
	<img src="img/logo.png" height="65" width="65" alt="Kazmik's Kitchen" class="logo">
	<h1 class="title">Kazmik's <span>Kitchen</span></h1>
</div>

<nav role="navigation" itemscope itemtype='https://schema.org/SiteNavigationElement'>

	<h1 class="hidden">Main Navigation</h1>

	<div class="navicon closed"><i class="fa fa-navicon"></i></div>
	<ul class="navmenu" id="opennav">
		<li><a href="index.html" >Home</a></li>
		<li><a href="ordernow.php" class="active">Order Now</a></li>
		<li><a href="bookatable.php">Book a Table</a></li>
		<li><a href="aboutus.html">About US</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>

</nav>


</header>

<main role="main" class="clearfix">


	<section class="ordernowhero">
		<div class="wrap clearfix">

		
			<div class="infotext">
				<h1>Order your heart's fill</h1>
				<p>We provide everything here. Just with a click of your mouse you can avail them. So start Clicking and start Eating!!</p>
			</div>

		</div>
	</section>


	<div class="wrap"> 

		<div class="product-nav">
			<h3> Categories </h3><hr/>
			<a href="ordernow.php?filter=null">Specials of the Week</a><br/><hr/>
			<a href="ordernow.php?filter=biriyani">Biriyani</a><br/><hr/>
			<a href="ordernow.php?filter=tandoor">Tandoor</a><br/><hr/>
			<a href="ordernow.php?filter=soup">Soup</a><br/><hr/>
			<a href="ordernow.php?filter=noodle">Noodle</a><br/><hr/>
			<a href="ordernow.php?filter=rice">Rice</a><br/>

		</div>

		<div class="cat-cart"> 
		<div class="product-catalog">
			

				<?php

				$filter=null;
				if(isset($_GET['filter']))
				$filter = $_GET['filter'];

			    //current URL of the Page. cart_update.php redirects back to this URL
				$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			    if(!isset($_GET['filter'])|!strcmp($filter,"null"))
			    {
					$results = $mysqli->query("SELECT * FROM products where specials = 'yes' ORDER BY id ASC");
				}
				else 
				{
					$results = $mysqli->query("SELECT * FROM products where product_cat = '".$filter."' ORDER BY id ASC");
				}

			    if ($results) { 
				
				        //fetch results set as object and output HTML
				        while($obj = $results->fetch_object())
				        {
				        	echo '<div class="product">'; 
				        	echo '<form method="post" action="cart_update.php">';
				        	echo '<div class="product-thumb"><img src="img/commingsoon.jpg"></div>';
				        	echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
				        	echo '<div class="product-info">';
							echo 'Price '.$currency.$obj->price.' | ';
				            echo 'Qty <input name="product_qty" value="1" type="text" size="3" /><br/>';
							echo '<button class="add_to_cart"><i class="fa fa-cart-plus" ></i>  Add To Cart</button>';
							echo '</div></div>';
							echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
				            echo '<input type="hidden" name="type" value="add" />';
							echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
				            echo '</form>';
				        	echo '</div>';

			        	}
	    	
				    }
			    ?>
			
		</div>

		<div class="shopping-cart">
			<h2>Your Shopping Cart</h2>
			<?php
			if(isset($_SESSION["products"]))
			{
			    $total = 0;
			    echo '<ol>';
			    foreach ($_SESSION["products"] as $cart_itm)
			    {
			        echo '<li class="cart-itm">';
			        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			        echo '<strong><h3>'.$cart_itm["name"].'</h3></strong>';
			        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
			        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
			        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
			        echo '</li>';
			        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			        $total = ($total + $subtotal);
			    }
			    echo '</ol>';
			    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
				echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
			}else{
			    echo 'Your Cart is empty';
			}
			?>
			
		</div>
		</div>

	</div>

</main>


<div class="footer">
	<footer role="complementary" class="clearfix wrap" itemscope itemtype="https://schema.org/WPFooter">

		<div class="copyright">&copy; 2015 Kazmik's Kitchen. All Rights Reserved.</div>

		<div class="social">

			<div class="icon">
				<a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a>
			</div>

			<div class="icon">
				<a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a>
			</div>

			<div class="icon">
				<a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus-square"></i></a>
			</div>

		</div>
	
	</footer>
</div>

<script src="js/rwd.js"></script>
</body>
</html>