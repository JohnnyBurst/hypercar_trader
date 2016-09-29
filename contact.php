<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
Free Responsive Html5 Templates : http://www.zerotheme.com
*/

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Automobile</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">Automobile</h3>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="archive.html">Staff</a>
                    </li>
					<li>
                        <a class="page-scroll" href="archive.html">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact Us</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<header>
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>Welcome to Red-Restaurant</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>The World's 50 Best Restaurants</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>National Restaurant Association</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</header>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archive-page">
	
		<!-- ////////////Content Box -->
		<section class="box-content box-bg-white">
			<div class="box-form">
				<div class="heading">
					<h2>Contact Us</h2>
				</div>
				<!--Warning-->
				<center><?php echo $text;?></center>
				<!---->
				<form name="form1" method="post" action="contact.php" id="ff">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Your Name" required="required" />
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Your Email" required="required" />
							</div>
							<div class="form-group">
								<input type="number" class="form-control input-lg" name="phone" id="phone" placeholder="Your Phone Number" required="required" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
								placeholder="Message"></textarea>
							</div>	
						</div>
					</div>
					<button type="submit" class="btn btn-2 btn-sm" name="submitcontact">send</button>
				</form>
			</div>
		</section>
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="no-gutter">
				<div class="col-md-4">
					<div class="box-text">
						<div class="footer-heading">
							<h2>Contacts</h2>
						</div>
						<p><i class="fa fa-map-marker"></i> My Company Glasgow D04 89GR</p>
						<p><i class="fa fa-phone"></i> 800-2345-6789</p>
						<p><i class="fa fa-envelope-o"></i> info@demolink.org</p>
						<p><i class="fa fa-clock-o"></i> 7 Days a week from 9:00 am to 7:00 pm</p>
						<ul class="list-inline social-link">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<p>Copyright @ Automobile - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
					</div>
				</div>
				<div class="col-md-8">
					<div class='embed-container maps'>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="590px" frameborder="0" style="border: 0"></iframe>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'orange',
			});
		});
	</script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>
	
