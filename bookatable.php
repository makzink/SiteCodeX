<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Kazmik Khan">
	<meta name="description" content="A website for Kazmik's Kitchen">
	<meta name="keywords" content="Kazmik, kazmik, khan, kazmik's kitchen, kitchen, tasty food">
	<title>Kazmik's Kitchen - Book a Table</title>
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
		<li><a href="index.html">Home</a></li>
		<li><a href="ordernow.php">Order Now</a></li>
		<li><a href="bookatable.php" class="active">Book a Table</a></li>
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


		if(isset($_POST['book'])) {

			$title = $_REQUEST['CustomerTitle'];
			$name = $_REQUEST['name'];
    		$email = $_REQUEST['foremail'];
    		$mob = $_REQUEST['MobileNumber'];
    		$date = $_REQUEST['BookingDate'];
    		$time = $_REQUEST['BookingTime'];
    		$nop = $_REQUEST['nop'];

    		$from = "Kazmik's Kitchen"; 
    		$to = $email; 
    		$subject = 'Booking Status';
    		$msg="Greetings $title $name, \n\n \t Your booking has been successfully done for ".$date." at ".$time." for ".$nop." people. We hope to serve u soon.
    		\n Kazmik's Kitchen";

    		$body = $msg;

    		if (mail ($to, $subject, $body, $from)) 
 		    { 
        		$res = '&nbsp&nbsp&nbspYour booking has been done!';
    		} 
			else 
    		{ 
        		$res = '&nbsp&nbsp&nbspSomething went wrong,please go back and try again!'; 
    		}
			
			echo "<div class='orderplaced' >". $res;
			echo "<br/><br/>Redirecting... Please Wait <i class='fa fa-refresh'></i></div>";

			header( "refresh:4;url='bookatable.php'" ); 
		}
		else
		{

	?>

	<div class="booktable-wrap">
		
		
			<form id="form" class="formbooktable" name="form" method="post" accept-charset="UTF-8" action="" autocomplete>
			   <div class="headtable"> <h1>Book A Table</h1> </div>
			    <div class="content">
			        <div class="introbooktable"></div>
			        <div id="section0" class="sortable">
			            <div class="fieldbooktable"><label for="CustomerTitle" id="CustomerTitleid">Customer Title</label><select id="CustomerTitle" name="CustomerTitle" required><option value="Mr">Mr</option><option value="Mrs">Mrs</option></select></div>
			            <div class="fieldbooktable"><label for="name" id="nameid">Customer Name</label><input type="text" id="name" name="name" required></div>
			            <div class="fieldbooktable"><label for="foremail">Email</label><input type="email" id="foremail" name="foremail" required></div>
			            <div class="fieldbooktable"><label for="MobileNumber">Mobile Number</label><input type="tel" id="MobileNumber" name="MobileNumber" required></div>
			            <div class="fieldbooktable"><label for="BookingDate">Booking Date</label><input type="date" id="BookingDate" name="BookingDate" required></div>
			            <div class="fieldbooktable"><label for="BookingTime">Booking Time</label><input type="time" id="BookingTime" name="BookingTime" required></div>
			            <div class="fieldbooktable"><label for="nop">No. of People</label><input type="number" id="nop" name="nop" required></div>
			            <div class="fieldbooktable"><label for="spl">Special Requirements</label><textarea id="spl" name="spl" wrap="hard"></textarea></div>
			            <div class="fieldbooktablebtn"><input type="submit" id="book" name="book" value="Book Table"></div>
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