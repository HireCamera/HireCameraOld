<?php ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HireCamera - Contact</title>
<!--
HireCamera Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png" /> 
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<!-- Header -->
	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-8 col-sm-3 tm-site-name-container">
  					<span><a href="index.php" ><img src="./img/logo.jpg" style="border:0px;margin:5px;float:left;width:140px;class="logoImg"></a></span>
						<span style="margin-left:5%;display: inline-block;height: 60px;"><a style="display: inline-block;height: 75%;" href="https://goo.gl/forms/zF2EgQfYHv41ATrT2" target="_blank"><img src="./img/mobile-menu-icon.jpg" class="logoImg img-responsive" ></a></span>
				</div>
				
	  			<div class="col-lg-4 col-lg-offset-2 col-md-3 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							
							<li><a href="index.php" >Home</a></li>
							<li><a href="tours.php" >Book Now</a></li>
							<li><a href="about.php" >About</a></li> 
							<li><a href="contact.php" class="active">Contact</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>

	<!-- Banner -->
		<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="img/world-map.png" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Feel free to say anything</h2>
							<!-- <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor, nisi elit consequat ipsum</h3> -->
							<p class="slider-description"><br><br><br> If you want to give any suggestion, Want to give feedback or want to contact for 
							any other purpose feel free to message us below. 
							<br><br><br><br><br>
							</p>
							<div class="slider-social">
			      		<a target="_blank" href="https://twitter.com/HireCameraIn" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
			      		<a target="_blank" href="https://www.facebook.com/HireCamera.in/" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
			      		<a target="_blank" href="https://www.instagram.com/hirecamera/" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
			      		<a target="_blank" href="https://www.linkedin.com/in/hire-camera-51552413a/" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
			      	</div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contact Us</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div id="google-map"></div>
						<div class="contact-social">
							<a target="_blank" href="https://twitter.com/HireCameraIn" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a target="_blank" href="https://www.facebook.com/HireCamera.in/" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a target="_blank" href="https://www.instagram.com/hirecamera/" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a target="_blank" href="https://www.linkedin.com/in/hire-camera-51552413a/" class="tm-social-icon tm-social-google-plus"><i class="fa fa-linkedin"></i></a>
						</div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="contact_name" class="form-control" placeholder="NAME" />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
						</div>
						<div class="form-group">
							<textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Submit now</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; HIreCamera 
                
                | Designed by <a rel="nofollow" href="http://www.HireCamera.in" target="_parent">HireCamera</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		/* Google map
      	------------------------------------------------*/
      	var map = '';
      	var center;

      	function initialize() {
	        var mapOptions = {
	          	zoom: 14,
	          	center: new google.maps.LatLng(26.8854479,75.650471),
	          	scrollwheel: false
        	};
        
	        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

	        google.maps.event.addDomListener(map, 'idle', function() {
	          calculateCenter();
	        });
        
	        google.maps.event.addDomListener(window, 'resize', function() {
	          map.setCenter(center);
	        });
      	}

	    function calculateCenter() {
	        center = map.getCenter();
	    }

	    function loadGoogleMap(){
	        var script = document.createElement('script');
	        script.type = 'text/javascript';
	        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	        document.body.appendChild(script);
	    }
	
      	// DOM is ready
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});

		  	// Flexslider
		  	$('.flexslider').flexslider({
		  		controlNav: false,
		  		directionNav: false
		  	});

		  	// Google Map
		  	loadGoogleMap();
		  });
	</script>
</body>
</html>

