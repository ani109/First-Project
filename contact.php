<!DOCTYPE html>
<html>
<head>
<title>ALANKAR CREATION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!--start-smoth-scrolling-->
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
<!--start-smoth-scrolling-->
</head>
<body>
	<!--head-->
	<div class="head" id="home">
		<div class="container">
			<div class="head-top">
				<div class="col-md-6 h-left">
					<p>+91 9920486240 </p>
				</div>
				<div class="col-md-6 h-right">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="rss"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
	</div>
	<!--head-->
	<!--header-->	
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="index.html"><h2>ALANKAR CREATION</h2></a>
				</div>
				<div class="head-right">	   		
					<div class="top-nav">
						<span class="menu"><img src="images/nav-icon.png" alt=""> </span>
						<ul>
							<li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
							<li><a href="about.html"><span class="glyphicon glyphicon-info-sign"></span>About</a></li>							
							<li><a href="work.html"><span class="glyphicon glyphicon-certificate"></span>WHAT WE DO</a></li>
                              <li><a href="donate.html"><span class="glyphicon glyphicon-thumbs-up"></span>SUPPORT</a></li>								
							<li><a href="gallery.html"><span class="glyphicon glyphicon-picture"></span>Gallery</a></li>								
							<li><a href="contact.php"  class="active"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
							<div class="clearfix"> </div>
						</ul>
						<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
	<!--//header-->
	<!--contact-starts-->
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="contact-form heading">
				<h3>Contact Form</h3>
				<div class="contact-bottom">
					<form method="POST" action="">
						<input type="text" name="name" placeholder="Name">
						<input type="text" name="email" placeholder="Email">
						<input type="text" name="Phone" placeholder="Phone">
						<textarea placeholder="Message" name="message" required></textarea>
						<div class="submit-btn">
							<input type="submit" name="submit" value="SUBMIT">
						</div>
					</form>
				</div>
			</div>
	</div>
	<?php
	
	if(isset($_REQUEST['email'])){
	
$to = "sudhasinghalankar@gmail.com";
$name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$phone = $_REQUEST['Phone'];
$txt = $_REQUEST['message'];
$headers = 'From: '.$Email."\r\n".
 
'Reply-To: '.$email."\r\n" .

 // mail($to, $name, $phone, $txt,  $Email);
 mail($to,'from : '.$name. ' Contact No : '. $phone,$txt,$headers);
 
 echo "Thank you for contacting us!";
 
}
?> 
	
	<div class="col-md-6">
	<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d47753.14235372253!2d-87.8390792!3d41.57851990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skohl&#39;s!5e0!3m2!1sen!2sin!4v1436335323316" style="border:0" allowfullscreen></iframe>
			</div>
	</div>
	</div>
	</div>
	<!--contact-end-->
	<!--address-starts-->
	<div class="address">
		<div class="container">
			<div class="address-top">
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					<p><label>ALANKAR CREATION.</label>
						Mumbai</p>
				</div>
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					<p>9920486240 , 
					<br></p>
				</div>
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<p><a href="mailto:sudhasinghalankar@gmail.com">sudhasinghalankar@gmail.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--address-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<a href="index.html"><h3>ALANKAR CREATION</h3></a>
				<p>© 2016 company name. All Rights Reserved | Developed by  <a href="http://http://www.weblordinfotech.com//" target="_blank">WeblordInfotech</a> </p>
				<a href="#home" class="scroll"><img src="images/top-arrow.png" alt="" /></a>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>