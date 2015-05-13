<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Kazmik Khan">
	<meta name="description" content="A website for Kazmik's Kitchen">
	<meta name="keywords" content="Kazmik, kazmik, khan, kazmik's kitchen, kitchen, tasty food">
	<title>Kazmik's Kitchen - View Cart</title>
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

<main role="main" class="clearfix wrap">

<div id="products-wrapper" class="view-cart-wrap">

 <h1>Your Cart</h1>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="checkout.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong> ';
		echo '</span>';
		echo '<br/><br/><a href="ordernow.php" class="cartcontinue">Continue Shopping</a>';
		echo '<input type="submit" value="Proceed to Checkout" class="cartsumbit" id="cartsumbitbtn"/>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
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
