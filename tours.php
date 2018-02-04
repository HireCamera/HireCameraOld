<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HireCamera - Tours</title>
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
 
  <style>
  .dropdown-menu{	
	width:auto !important;
	margin-left:10px;
 	padding: 10px !important;
  }
  #pop{
	display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.5);
  }
  .margin-t{
  	margin-top: 3% !important;
  }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-8 col-sm-3 tm-site-name-container">
  					<!-- <a href="#" class="tm-site-name">HireCamera</a> https://goo.gl/forms/zF2EgQfYHv41ATrT2-->
  						<span><a href="index.php" ><img  src="./img/logo.jpg" style="border:0px;margin:5px;float:left;width:140px;"></a></span>
						<span style="margin-left:5%;display: inline-block;height: 60px;"><a style="display: inline-block;height: 75%;" href="https://goo.gl/forms/zF2EgQfYHv41ATrT2" target="_blank"><img src="./img/mobile-menu-icon.jpg" class="logoImg img-responsive" ></a></span>
				</div>
				
	  			<div class="col-lg-4 col-lg-offset-2 col-md-3 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							
							<li><a href="index.php">Home</a></li>
							<li><a href="tours.php"  class="active">Book Now</a></li>				
							<li><a href="about.php">About</a></li> 
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<!-- <section class="tm-banner"> -->
		<!-- Flexslider -->
		<!-- <div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li> -->
			   <!--  <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">Tour</span> Programs</h1>
					<p class="tm-banner-subtitle">For Your Destinations</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div> -->
		  <!--     <img src="img/banner-2.jpg" />
		    </li>
		    <li> -->
			    <!-- <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>
					<p class="tm-banner-subtitle">Wonderful Destinations</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div> -->
		  <!--     <img src="img/banner-3.jpg" />
		    </li>
		    <li> -->
			    <!-- <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>
					<p class="tm-banner-subtitle">Velit Auctor</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div> -->
		     <!--  <img src="img/banner-1.jpg" />
		    </li>
		  </ul>
		</div>			
	</section> -->

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 "></div>
			<div class="col-lg-4 col-md-4 col-sm-6 ">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation">
					    	<a href="#hotel" style="cursor:default !important;" aria-controls="hotel" role="tab" data-toggle="tab">Check Availability</a>
					    </li>
					    
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<!-- <div class="form-group">
							            	 <input type="text" placeholder="Address" id="address" class="form-control" name="address"/> 
							          	</div> -->

							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker1'>
							                    <input name="in" type='text' class="form-control" placeholder="Check-in Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
											
							                </div>
							            </div>

							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker2'>
							                    <input name="out" type='text' class="form-control" placeholder="Check-out Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
											
							                </div>
							            </div>
							            <!-- <div class="form-group margin-bottom-0">
							                 <input type="number" placeholder="Mobile Number" id="phoneNo" class="form-control" name="phoneNo"/> 
							            </div> -->
									</div>

						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Go</button>
						            </div>  
								</form>
								
								

							</div>
					    </div>


					    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Select Model -- </option>
							            	 	<option value="shangrila">BMW</option>
												<option value="chatrium">Mercedes-Benz</option>
												<option value="fourseasons">Toyota</option>
												<option value="hilton">Honda</option>
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker13'>
							                    <input type='text' class="form-control" placeholder="Pickup Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker14'>
							                    <input type='text' class="form-control" placeholder="Return Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>	
							            <div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Options -- </option>
							            	 	<option value="">Child Seat</option>
												<option value="">GPS Navigator</option>
												<option value="">Insurance</option>
											</select> 
							          	</div>						           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 "></div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="img/index-01.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span>New York</span>
							<span>$6,600</span>
						</div>	
					</a>			
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="img/index-02.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>Paris</span>
							<span>$4,200</span>
						</div>	
					</a>					
				</div>				
			</div>
			 -->
		</div>
	
		<!-- <div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Our Tours</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	
								<p class="gray-text">28 March 2084</p>
							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	
							</div>							
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Duration: 8 days
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								$2,200								
							</a>							
						</div>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	
								<p class="gray-text">26 March 2084</p>
							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	
							</div>							
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Duration: 9 days
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								$1,800								
							</a>							
						</div>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	
								<p class="gray-text">24 March 2084</p>
							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	
							</div>							
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Duration: 8 days
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								$1,600								
							</a>							
						</div>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20">Proin Gravida Nibhvel Lorem Quis Bind</p>	
								<p class="gray-text">22 March 2084</p>
							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, sec sagittis sem nibh id elit.</p>	
							</div>							
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Duration: 5 days
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								$1,200								
							</a>							
						</div>
					</div>					
				</div>
			</div>		
		</div> -->
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title"><?php if(isset($_POST['submit'])) echo "Available Camera"; else echo "Camera Store"; ?></h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				
				<?php 
								if(isset($_POST['submit'])) 
								{ 				
  						  		
  						  		// $username = $_POST['in'];
  						  		// echo $username;

								$Chkin = $_REQUEST['in'];
								$Chkout = $_REQUEST['out'];

								$Chkin = date('Y-m-d H:i:s' , strtotime($Chkin));

								$Chkout = date('Y-m-d H:i:s' , strtotime($Chkout));		
								// $query = query("insert into `table` (date) values ('$date')");
								// $query = "insert into `table` (date) values ('$date')"";
								// print_r($Chkin);
								// print_r($Chkout);

								$query = "select * 
								from `table` 
								where chkin > '$Chkin' ";
								//print_r($query);

								// $phpdate = strtotime( $username );
								// $d = DateTime::createFromFormat('m/d/y h:i A', '$username',new DateTimeZone('UTC')); 
								// echo $d;

								// #echo $phpdate;

  						//   		$Timein= date("Y-m-d H:i:s",strtotime(str_replace('/','-',$username)));
  						//   		$username = $_POST['out'];
  						//   		$Timeout = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$username)));
  						  		
  						  		$dbc = mysqli_connect('mysql.hostinger.in','u723120751_hirec','hirecamera@123','u723120751_hire') or die('Error while connecting Database'.mysql_connect_error);
  						  		
  						  					
								//$q="select * from camera where NOT (chkin  > '$Timein' AND chkout < '$Timeout')";
								$q="select * from camera where chkin  > '$Chkout' OR '$Chkin' > chkout";
								//print_r($q);

								$r = mysqli_query($dbc,$q);								
								
								while ($data = mysqli_fetch_assoc($r)) {?>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-t">
										<div class="tm-tours-box-2">		
											<img src="img/index-0<?php echo $data['id'];?>.jpg" alt="image" class="img-responsive">
											<div class="tm-tours-box-2-info">
												<h3 class="margin-bottom-15"><?php echo $data['name']; ?></h3>
												<p>Rs <?php echo $data['price']; ?>/day</p>	
											</div>						
											<a  class="tm-tours-box-2-link book_pop">Book Now</a>
										</div>
									</div>
								<!-- <?php echo $data['id']; ?> -->
								
								<?php										
								
								}	
								 }

							else {
								 
								$dbc = mysqli_connect('mysql.hostinger.in','u723120751_hirec','hirecamera@123','u723120751_hire') or die('Error while connecting Database'.mysql_connect_error);
  						  		
  						  					
								//$q="select * from camera where NOT (chkin  > '$Timein' AND chkout < '$Timeout')";
								$q="select * from camera";
								//print_r($q);

								$r = mysqli_query($dbc,$q);								
								
								while ($data = mysqli_fetch_assoc($r)) {?>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-t">
										<div class="tm-tours-box-2">		
											<img src="img/index-0<?php echo $data['id'];?>.jpg" alt="image" class="img-responsive">
											<div class="tm-tours-box-2-info">
												<h3 class="margin-bottom-15"><?php echo $data['name']; ?></h3>
												<p>Rs <?php echo $data['price']; ?>/day</p>	
											</div>						
											<a  class="tm-tours-box-2-link book_pop">Book Now</a>
										</div>
									</div>
								<!-- <?php echo $data['id']; ?> -->
								
								<?php										
								
								}	


								 }	 



								if(isset($_POST['usubmit']))
								{
									$uname=$_POST['uname'];
									$uemail=$_POST['uemail'];
									$uphone=$_POST['uphone'];
									// $uin=$_POST['uin'];
									// $uin=date('Y-m-d H:i:s' , strtotime($uin));

									// $uout=$_POST['uout'];
									// $uout=date('Y-m-d H:i:s' , strtotime($uout));
									
									$uaddress=$_POST['uaddress'];

									date_default_timezone_set('Asia/Kolkata');
									$udate= date('Y-m-d H:i:s');
	
  						  			$dbc = mysqli_connect('mysql.hostinger.in','u723120751_hirec','hirecamera@123','u723120751_hire') or die('Error while connecting Database'.mysql_connect_error);
  						  		
  						  					
									//$q="select * from camera where NOT (chkin  > '$Timein' AND chkout < '$Timeout')";
									$q="insert into user (mobile, email_id,name,Address,Date) values ('$uphone','$uemail','$uname','$uaddress','$udate')";
									//print_r($q);

									$r = mysqli_query($dbc,$q);

								}



				?>


			
<!-- 
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Nikon NS4</h3>
							
							<p>Rs 800/day</p>	
						</div>						
						<a  class="tm-tours-box-2-link" onclick="POP()">Book Now</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Canon N300</h3>
							
							<p>Rs 400/day</p>	
						</div>						
						<a  class="tm-tours-box-2-link" onclick="POP()">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Sony C600</h3>
							
							<p>Rs 500/day</p>	
						</div>						
						<a  class="tm-tours-box-2-link" onclick="POP()">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Nicon D500</h3>
							
							<p>Rs 300/day</p>	
						</div>						
						<a  class="tm-tours-box-2-link" onclick="POP()">Book Now</a>
					</div>
				</div>
			</div>
 -->
			<div class="row">
				<div class="col-lg-12">
	<!-- 				<p class="home-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					Morbi accumsaipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat.
					</p> -->					
				</div>
			</div>	
		</div>
	</section>
	<div id="pop" class="container">
		<div class="row" style="margin-top:10%;">
			<div class="col-lg-4 col-md-4 col-sm-6 "></div>
			<div class="col-lg-4 col-md-4 col-sm-6 ">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation">
					    	<a href="#hotel" style="cursor:default !important;" aria-controls="hotel" role="tab" data-toggle="tab">Check Availability</a>
					    </li>
					    
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<!-- <div class="form-group">
							            	 <input type="text" placeholder="Address" id="address" class="form-control" name="address"/> 
							          	</div> -->
							          	<div class="form-group">
							                    <input type='text' name="uname" style="margin-bottom:10px;" class="form-control" placeholder="Name" />
												<input type='email' name="uemail" style="margin-bottom:10px;" class="form-control" placeholder="Email Id" />
												<input type='number' name="uphone" class="form-control" style="margin-bottom:10px;" placeholder="Phone" />
												<!-- <div class="form-group">
							                		<div class='input-group date' id='datetimepicker3'>
							                    	<input name="uin" type='text' class="form-control" placeholder="Check-in Date" />
							                    	<span class="input-group-addon">
							                        	<span class="fa fa-calendar"></span>
							                    	</span>
											
							                		</div>
							            		</div>

							          			<div class="form-group">
							                		<div class='input-group date' id='datetimepicker4'>
							                    	<input name="uout" type='text' class="form-control" placeholder="Check-out Date" />
							                    	<span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    	</span>
											
							                		</div>
							            		</div> -->
												
												<textarea name="uaddress" placeholder="Addrress"style="margin-bottom:10px;" class="form-control"></textarea>
							            </div>

							            <!-- <div class="form-group margin-bottom-0">
							                 <input type="number" placeholder="Mobile Number" id="phoneNo" class="form-control" name="phoneNo"/> 
							            </div> -->
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="usubmit" class="tm-yellow-btn">Book your Camera</button>
						            </div>  
								</form>
							</div>
					    </div>



					    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Select Model -- </option>
							            	 	<option value="shangrila">BMW</option>
												<option value="chatrium">Mercedes-Benz</option>
												<option value="fourseasons">Toyota</option>
												<option value="hilton">Honda</option>
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker3'>
							                    <input type='text' class="form-control" placeholder="Pickup Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>

							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker4'>
							                    <input type='text' class="form-control" placeholder="Return Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>	

							            <div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Options -- </option>
							            	 	<option value="">Child Seat</option>
												<option value="">GPS Navigator</option>
												<option value="">Insurance</option>
											</select> 
							          	</div>						           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 "></div>
			</div>
	<span id="close" style="cursor:pointer;color:#fff;position:fixed;top:5%;right:5%;">X</span>
	</div>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; HireCamera 
                
                | Designed by <a href="https://coloredfeather.in/" rel="nofollow"  target="_blank">ColoredFeather</a> | <a href="https://www.facebook.com/lakshayArora940" target="_blank">Lakshya Arora</a></p>
			</div>
		</div>		
	</footer>
	
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<!-- <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script> -->	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="js/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>


	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			// $('#hotelCarTabs a').click(function (e) {
			//   e.preventDefault()
			//   $(this).tab('show')
			// })

   //      	$('.date').datetimepicker({
            	
   //          });

   //          $('.date-time').datetimepicker();
            $('#datetimepicker1').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
        $('#datetimepicker2').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

         $('#datetimepicker3').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
          $('#datetimepicker4').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });



	// 		// https://css-tricks.com/snippets/jquery/smooth-scrolling/
	// $('a[href*=#]:not([href=#])').click(function(e) {
	// 	e.preventDefault();
	// 		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	// 		      var target = $(this.hash);
	// 		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	// 		      if (target.length) {
	// 		        $('html,body').animate({
	// 		          scrollTop: target.offset().top
	// 		        }, 1000);
	// 		        return false;
	// 		      }
	// 		    }
	// 	  	});
	 });
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
		    $('.flexslider').flexslider({
			    controlNav: false
		    });
	  	});
		$(document).keyup(function(e){
			if(e.which==27){
				//alert("asd");
				$("#pop").hide();
			}
		});
		$(document).on("click",".book_pop", function(){
			$("#pop").show();
		});

		$("#close").click(function(){
			//alert("asdasd");
			$("#pop").hide();
		});
	</script>
 </body>
 </html>
