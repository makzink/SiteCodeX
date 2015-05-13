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

<section class="welcome">

<main role="main" class="clearfix wrap">

	<?PHP
		$name='';
		$email='';
		$mob='';
		$msg='';
		$res='';


		if(isset($_POST['PlaceOrder'])) {

			$name = $_REQUEST['name'];
    		$email = $_REQUEST['foremail'];
    		$mob = $_REQUEST['MobileNumber'];

    		$from = "Kazmik's Kitchen"; 
    		$to = $email; 
    		$subject = 'Order Status';
    		$msg="Greetings $name, \n \t Your order has been successfully placed and is currently under process. The ordered items will be delivered soon.
    		\n Kazmik's Kitchen";

    		$body = $msg;

    		if (mail ($to, $subject, $body, $from)) 
 		    { 
        		$res = '&nbsp&nbsp&nbspYour order has been placed!';
    		} 
			else 
    		{ 
        		$res = '&nbsp&nbsp&nbspSomething went wrong,please go back and try again!'; 
    		}
			
			echo "<div class='orderplaced' >". $res;
			echo "<br/><br/>Redirecting... Please Wait <i class='fa fa-refresh'></i></div>";

			$return_url = base64_encode($url="ordernow.php");
			header( "refresh:4;url='cart_update.php?emptycart=1&return_url='".$return_url."'" ); 
		}
		else
		{

	?>

	<div class="checkout-form-container">

		<form id="form" class="formcheckout" method="post"  accept-charset="UTF-8">
			<div class="orderplaced" ><?PHP echo $res; ?> </div>
		    <h1>Delivery Details</h1>
		    <div class="content">
		        <div class="intro"></div>
		        <div id="section0" >
		            <div class="field"><label for="Name">Name</label><input type="text" id="name" name="name" required></div>
		            <div class="field"><label for="Email">Email Address</label><input type="email" id="foremail" name="foremail" required></div>
		            <div class="field"><label for="MobileNumber">Mobile Number</label><input type="tel" id="MobileNumber" name="MobileNumber" required></div>
		            <div class="field"><label for="Company">Company</label><input type="text" id="Company" name="Company"></div>
		            <div class="field"><label for="Address">Address</label><textarea id="Address" name="Address" wrap="hard" required></textarea></div>
		            <div class="field"><label for="City">City</label><input type="text" id="City" name="City" required></div>
		            <div class="field"><label for="Pincode">Pincode</label><input type="number" id="Pincode" name="Pincode" required></div>
		            <div class="field submitbtn"><input type="submit" id="PlaceOrder" name="PlaceOrder" value="Place Order"></div>
		            <div class="payment field"><label class="checkout" for="PaymentMethod">Payment Method:</label><span class="checkout">Cash On Delivery</span><input type="radio" value="Payment" id="PaymentMethod" name="PaymentMethod" checked="checked" disabled readonly></div>
		        </div>
		    </div>
		</form>	
	</div>

	<?php
	 }

	 ?>
	

</main>

</section>

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
