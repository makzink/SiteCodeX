<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Kazmik Khan">
	<meta name="description" content="A website for Kazmik's Kitchen">
	<meta name="keywords" content="Kazmik, kazmik, khan, kazmik's kitchen, kitchen, tasty food">
	<title>Kazmik's Kitchen - Contact US</title>
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
<?php
$name='';
$email='';
$message='';
$res='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['Name'];
    $email = $_REQUEST['formemail'];
    $message = $_REQUEST['Message'];
	

    $from = 'From: kazmik.in'; 
    $to = 'makzink@gmail.com'; 
    $subject = 'Customer Inquiry';
    $body = "From:" .$name."\r\n E-Mail:" .$email."\r\n Message:\r\n" .$message;

if (mail ($to, $subject, $body, $from)) 
    { 
        $res = '&nbsp&nbsp&nbspYour message has been sent!';
    } 
else 
    { 
        $res = '&nbsp&nbsp&nbspSomething went wrong, go back and try again!'; 
    }
}

?>

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
		<li><a href="menu.php">Menu</a></li>
		<li><a href="#bittoeat">Bite To Eat<span>+</span></a>
				<ul>
				<li><a href="bookatable.php">Book a Table</a></li>
				<li><a href="homedelivery.php">Home Delivery</a></li>
				</ul>
		</li>
		<li><a href="aboutus.html">About US</a></li>
		<li><a href="#" class="active">Contact</a></li>
	</ul>

</nav>
</header>

<main role="main" class="clearfix">

<section class="herounitcontact">
		<div class="wrap">
			<h2>Let's stay in touch!</h2>
			<p>Come visit us at our place. And if you would like get in touch with our team simply fill out the nifty form below. Cheers!</p>
		</div>
</section>

<section class="location">

	<div class="map wrap">
		<p> <i class="fa fa-map-marker"></i> Location</p>
		<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.658033292675!2d75.77158400000003!3d11.286528820258814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65edcb6b8153d%3A0xba3723b5f552660c!2sIndian+Express!5e0!3m2!1sen!2sus!4v1430386543146' height="300" width="400" frameborder="0" style="border:0"></iframe></div>
	</div>

	<div class="wrap">

	<hr/>	
	<div class="addrtime">
	<div class="address">
		<p><i class="fa fa-thumb-tack"></i> Our Place</p>
		<p id="addr">
			Kazmik's Kitchen, 
			Behind Indian Express,
			Easthill Road, 
			Westhill P.O.
			Calicut, Kerala. <br/>
			<i class="fa fa-phone"></i> 9895409595
		</p>
	</div>
	
	<div class="hours">

		<p id="title"><i class="fa fa-clock-o"></i> Business Hours</p>
		<p id="timing">
			Weekdays  :  9am-11pm<br/>
			Saturday  :  9am-10pm<br/>
			Sunday    :  11am-10am
		</p>
			
	</div>
	</div>

	<div class="formcontainer">
		<p><i class="fa fa-envelope"></i> Feel free to get in touch with us</p>
		<form id="form" class="form" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" autocomplete>
    		<div class="content">
        		<div id="section0" >
            	<div class="field"><label for="Name">Name</label><input type="text" id="Name" name="Name" maxlength="30" required></div>
            	<div class="field"><label for="formemail">Email</label><input type="email" id="formemail" name="formemail" required></div>
            	<div class="field"><label for="Message">Message</label><textarea id="Message" name="Message" wrap="hard" required></textarea></div>
            	<div class="field"><input type="submit" id="Submit" name="Submit"><p id="form_p"><?php echo $res; ?></p></div>
        </div>
    </div>
</form>
	</div>

	</div>
	
</section>

	
</main>


    <div class="footer" >
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