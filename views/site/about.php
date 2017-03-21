<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = \Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	
    <!-- Bootstrap -->
    <link href="<?=Url::to('@web/')?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?=Url::to('@web/')?>assets/css/custom.css" rel="stylesheet" media="screen">


	<link href="<?=Url::to('@web/')?>examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=Url::to('@web/')?>assets/js/html5shiv.js"></script>
      <script src="<?=Url::to('@web/')?>assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
	<!-- PIECHART -->
	<link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>assets/css/jquery.easy-pie-chart.css">	
	
	<!-- Animo css-->
	<link href="<?=Url::to('@web/')?>plugins/animo/animate+animo.css" rel="stylesheet" media="screen">

    <!-- Picker -->	
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/jquery-ui.css" />	
	
    <!-- jQuery -->		
    <script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>
	

	
  </head>
  <body id="top" class="thebg" >
    
	<div class="navbar-wrapper2 navbar-fixed-top">
      <div class="container">
		<div class="navbar mtnav">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="<?=Url::to('@web/')?>index.html" class="navbar-brand"><img src="<?=Url::to('@web/')?>images/logo.png" alt="Travel Agency Logo" class="logo"/></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown active">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?=Url::to('@web/')?>index.html">Home <span class="badge indent0">1</span><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu posright-0">
					  <li>
							<div class="row dropwidth01">
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Homepages</li>	
								  <li><a href="<?=Url::to('@web/')?>index.html">Home 1 minimal</a></li>
								  <li><a href="<?=Url::to('@web/')?>index2.html">Home 2 offers</a></li>
								  <li><a href="<?=Url::to('@web/')?>index3.html">Home 3 full search</a></li>
								  <li><a href="<?=Url::to('@web/')?>index4.html">Home 4 presentation</a></li>
								  <li><a href="<?=Url::to('@web/')?>index5.html">Home 5 footer2</a></li>
								  <li><a href="<?=Url::to('@web/')?>index6.html">Home 6 full</a></li>
								  <li><a href="<?=Url::to('@web/')?>index7.html">Home 7 </a></li>
								  <li><a href="<?=Url::to('@web/')?>z-new-homepage.html">New Homepage</a> <span class="green">new</span></li>									  
								</ul>
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Intro pages</li>
								  <li><a href="<?=Url::to('@web/')?>intro.html">Intro 1</a></li>
								  <li><a href="<?=Url::to('@web/')?>intro2.html">Intro 2 - slides</a> <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="<?=Url::to('@web/')?>intro3.html">Intro 3 - slides2</a> <span class="glyphicon glyphicon-star lblue"></span></li>
								</ul>
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Colors</li>
								  <li><a href="<?=Url::to('@web/')?>../blue/index.html">Blue</a></li>
								  <li><a href="<?=Url::to('@web/')?>../green/index.html">Green</a></li>
								  <li><a href="<?=Url::to('@web/')?>../orange/index.html">Orange</a></li>
								  <li><a href="<?=Url::to('@web/')?>../cyan/index.html">Cyan</a></li>
								  <li></li>
								  <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>								  
								</ul>
							</div>
					  </li>
					</ul>
				  </li>
				  <li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?=Url::to('@web/')?>#">Pages <span class="badge indent0">14</span><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu posright-0">
					  <li>
							<div class="row dropwidth01">
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Inner pages</li>	
								  <li><a href="<?=Url::to('@web/')?>list.html">List page 1</a></li>
								  <li><a href="<?=Url::to('@web/')?>list2.html">List page 2</a></li>
								  <li><a href="<?=Url::to('@web/')?>list3.html">List page 3</a></li>
								  <li><a href="<?=Url::to('@web/')?>list4.html">List page 4</a></li>
								  <li><a href="<?=Url::to('@web/')?>details.html">Details page</a></li>
								  <li><a href="<?=Url::to('@web/')?>payment.html">Payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>blog.html">Blog page</a></li>
								  <li><a href="<?=Url::to('@web/')?>blog-details.html">Blog details</a></li>	
								  <li><a href="<?=Url::to('@web/')?>about.html">About</a></li>								  
								  <li><a href="<?=Url::to('@web/')?>contact.html">Contact</a></li>
								  <li><a href="<?=Url::to('@web/')?>profile.html">User Profile</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="<?=Url::to('@web/')?>login.html">Login</a></li>
								  <li><a href="<?=Url::to('@web/')?>dashboard/index.html">Dashboard</a>  <span class="glyphicon glyphicon-star lblue"></span></li>								  

						  
								</ul>	
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Update - <span class="green">14 New Pages</span></li>	
								  <li><a href="<?=Url::to('@web/')?>z-new-homepage.html">New Homepage</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="<?=Url::to('@web/')?>z-flights-list.html">Flights list</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="<?=Url::to('@web/')?>z-flights-payment.html">Flights payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-cruise-list.html">Cruise list</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-cruise-payment.html">Cruise payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-rentacar-list.html">Rent a car list</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-rentacar-details.html">Rent a car details</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-rentacar-payment.html">Rent a car payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-transfers-list.html">Transfers list</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-transfers-payment.html">Transfers payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-activities-list.html">Activities list</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-activities-details.html">Activities details</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-activities-payment.html">Activities payment</a></li>
								  <li><a href="<?=Url::to('@web/')?>z-wearesearching.html">Loading page</a></li>
								</ul>								
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Bootstrap Shortcodes</li>	
								  <li ><a href="<?=Url::to('@web/')?>http://getbootstrap.com/components/" target="_blank">Components</a></li>								  
								  <li ><a href="<?=Url::to('@web/')?>http://getbootstrap.com/javascript/" target="_blank">Javascript</a></li>								  
								  <li ><a href="<?=Url::to('@web/')?>http://getbootstrap.com/css/" target="_blank">Css</a></li>	
								  <li class="dropdown-header">Comming next</li>	
								  <li class="inactive"><a href="<?=Url::to('@web/')?>#">More Home pages</a></li>
								  <li class="inactive"><a href="<?=Url::to('@web/')?>#">Elements</a></li>
								  <li class="inactive"><a href="<?=Url::to('@web/')?>#">...</a></li>
								  <li></li>								  
								  <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>
								</ul>									
							</div>
					  </li>
					</ul>
				  </li>
				  <li><a href="<?=Url::to('@web/')?>#">Hotels</a></li>
				  <li><a href="<?=Url::to('@web/')?>#">Flights</a></li>
				  <li><a href="<?=Url::to('@web/')?>#">Vacations</a></li>
				  <li><a href="<?=Url::to('@web/')?>#">Cars</a></li>			  
				  <li><a href="<?=Url::to('@web/')?>#">Cruises</a></li>			  
				  <li><a href="<?=Url::to('@web/')?>#">Last minute</a></li>			  
				  <li><a href="<?=Url::to('@web/')?>#">Early booking</a></li>			  
				  <li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?=Url::to('@web/')?>#">Deals<b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu">
					  <li class="dropdown-header">Aligned Right Dropdown</li>	
					  <li><a href="<?=Url::to('@web/')?>#">Sample Link 1</a></li>
					  <li><a href="<?=Url::to('@web/')?>#">Sample Link 2</a></li>
					</ul>
				  </li>		
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="<?=Url::to('@web/')?>#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="<?=Url::to('@web/')?>#" class="active">About us</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="<?=Url::to('@web/')?>#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
			
			<!-- CONTENT -->
			<div class="col-md-12 pagecontainer2 offset-0">
				<div class="hpadding50c">
					<p class="lato size30 slim">Meet the team</p>
					<p class="aboutarrow"></p>
				</div>
				<div class="line3"></div>
				
				<div class="hpadding50c">
					
					<p class="lato size22 slim textcenter">
					Your online travel agency. As one of the world's leading online travel companies,<br/>
					we make it easy to plan your next business or leisure trip
					</p>
					<br/>
					<div class="line3"></div>
					<br/>

					<!-- LEFT IMG -->
					<div class="col-md-8 cpdd01">
						<img src="<?=Url::to('@web/')?>images/about-man.jpg" class="fwimg" alt=""/>
					</div>
					<!-- END OF LEFT IMG -->
					
					<!-- IMG RIGHT TEXT -->
					<div class="col-md-4 cpdd02">
						<div class="opensans size18 grey">
							<span class="lato dark bold">Company</span><br/>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat semper tempor. Nullam commodo varius augue, lobortis dapibus ante fringilla quis. 
							<br/><br/>
							

							<span class="lato dark bold">Speciality</span><br/>
							<div class="progress-about margbtm10">
							  <div class="progress-bar progress-bar-success pbar1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								Speciality 1 90%
							  </div>
							</div>	
							<div class="progress-about margbtm10">
							  <div class="progress-bar progress-bar-success pbar2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								Speciality 2 100%
							  </div>
							</div>	
							<div class="progress-about margbtm10">
							  <div class="progress-bar progress-bar-success pbar3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								Speciality 3 85%
							  </div>
							</div>	
							<div class="progress-about">
							  <div class="progress-bar progress-bar-success pbar4" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								Speciality 4 95%
							  </div>
							</div>	

						</div>
					</div>
					<!-- END OF IMG RIGHT TEXT -->
					<div class="clearfix"></div>
					<br/><br/>
					
				
					<span class="lato size18 dark bold">Meet the Team</span><br/><br/>
					
					<div class="col-md-4">
						<div class="abover ohidden">
							<div class="abbg">
								<div class="socials-container">
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Twitter" class="left"><span class="socials-twitter "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Facebook" class="left"><span class="socials-facebook "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Google Plus" class="left"><span class="socials-gplus "></span></a>
								</div>
							</div>
							<img src="<?=Url::to('@web/')?>images/about-women.jpg" class="fwimg" alt=""/>
							<div class="chart none" data-percent="69" style="float:right; margin-top:-60px; right:10px;"><span class="countbouncerate">69</span>%</div>
						</div>
						<p class="lato lh2 mt10"><b>John Doe</b><br/>
						Marketing
						</p>
					</div>
					<div class="col-md-4">
						<div class="abover ohidden">
							<div class="abbg">
								<div class="socials-container">
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Twitter" class="left"><span class="socials-twitter "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Facebook" class="left"><span class="socials-facebook "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Google Plus" class="left"><span class="socials-gplus "></span></a>
								</div>
							</div>
							<img src="<?=Url::to('@web/')?>images/about-men2.jpg" class="fwimg" alt=""/>
							<div class="chart2 none" data-percent="69" style="float:right; margin-top:-60px; right:10px;"><span class="countnewvisits">81</span>%</div>
						</div>
						<p class="lato lh2 mt10"><b>John Doe</b><br/>
						C.E.O. 
						</p>						
					</div>
					<div class="col-md-4">
						<div class="abover ohidden">
							<div class="abbg">
								<div class="socials-container">
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Twitter" class="left"><span class="socials-twitter "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Facebook" class="left"><span class="socials-facebook "></span></a>
									<a href="<?=Url::to('@web/')?>#" data-placement="top" title="Google Plus" class="left"><span class="socials-gplus "></span></a>
								</div>
							</div>
							<img src="<?=Url::to('@web/')?>images/about-women2.jpg" class="fwimg" alt=""/>	
							<div class="chart3 none" data-percent="69" style="float:right; margin-top:-60px; right:10px;"><span class="countsearchtrafic">33</span>%</div>							
						</div>
						<p class="lato lh2 mt10"><b>John Doe</b><br/>
						Marketing
						</p>						
					</div>		
					<div class="clearfix"></div>
					
					<br/>
					<br/>
					
					
					<div class="line3"></div>
					<br/>
					<br/>
					
					<div class="col-md-4">
						<div class="opensans grey2">
							<span class="gcircle">1</span><span class="lato size18 dark mt6 ml10"><b>Short history</b></span><br/><br/>
							Suspendisse convallis, est mollis venenatis tristique, nisl lectus eleifend est, id ultrices diam dui at dolor. Praesent risus quam, sodales cursus cursus in, congue non enim. Vestibulum tristique mollis neque vitae tempus. 
							<ul class='checklist2'>
								<li>Pellentesque non dolor urna</li>
								<li>Tempor nisl et enim sagittis egestas</li>
								<li>Aenean a purus vel nisi aliquet ultricies</li>
								<li>Ut nunc vivamus at erat ligula suspen</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">

						<p class="opensans grey2">
						<span class="gcircle">2</span><span class="lato size18 dark mt6 ml10"><b>Our main goal</b></span><br/><br/>
						Pellentesque non dolor urna. Praesent tempor nisl et enim sagittis egestas. Aenean a purus vel nisi aliquet ultricies vel ut nunc. Vivamus at erat ligula. Suspendisse bibendum tellus vitae ipsum malesuada euismod vel nec risus. Aliquam egestas sodales ornare. Pellentesque a lorem eget turpis venenatis tincidunt quis id magna. 
						<br/>
						<br/>
						Nulla faucibus nisl a arcu convallis bibendum at sed nulla. Proin tellus est, scelerisque ut luctus ut, tincidunt ac neque. 
						Phasellus lectus enim, convallis quis faucibus eget, mattis eget erat. Aliquam id metus ligula, vel laoreet lorem. Pellentesque varius dignissim orci eu accumsan. 
						</p>						
					</div>
					<div class="col-md-4">
	
						<p class="opensans grey2">
						<span class="gcircle">3</span><span class="lato size18 dark mt6 ml10"><b>Want to join us?</b></span><br/><br/>
						Pellentesque non dolor urna. Praesent tempor nisl et enim sagittis egestas. Aenean a purus vel nisi aliquet ultricies vel ut nunc. 
						<br/>
						<br/>
						Vivamus at erat ligula. Suspendisse bibendum tellus vitae ipsum malesuada euismod vel nec risus. Aliquam egestas sodales ornare. 
						Pellentesque a lorem eget turpis venenatis 
						tincidunt quis id magna. 
						<br/>
						<button class="btn-search4 caps center margtop20">Apply now</button>
						</p>						
					</div>		
					<div class="clearfix"></div>
					
					
				</div>
				

				
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
			

			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

	
	
	<!-- FOOTER -->
	
	<div class="footerbgblack">
		<div class="container">		
			
			<div class="col-md-3">
				<span class="ftitleblack">Let's socialize</span>
				<div class="scont">
					<a href="<?=Url::to('@web/')?>#" class="social1b"><img src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a>
					<a href="<?=Url::to('@web/')?>#" class="social2b"><img src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a>
					<a href="<?=Url::to('@web/')?>#" class="social3b"><img src="<?=Url::to('@web/')?>images/icon-gplus.png" alt=""/></a>
					<a href="<?=Url::to('@web/')?>#" class="social4b"><img src="<?=Url::to('@web/')?>images/icon-youtube.png" alt=""/></a>
					<br/><br/><br/>
					<a href="<?=Url::to('@web/')?>#"><img src="<?=Url::to('@web/')?>images/logosmal2.png" alt="" /></a><br/>
					<span class="grey2">&copy; 2013  |  <a href="<?=Url::to('@web/')?>#">Privacy Policy</a><br/>
					All Rights Reserved </span>
					<br/><br/>
					
				</div>
			</div>
			<!-- End of column 1-->
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="<?=Url::to('@web/')?>#">Golf Vacations</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Ski & Snowboarding</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Disney Parks Vacations</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Disneyland Vacations</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Disney World Vacations</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Vacations As Advertised</a></li>
				</ul>
			</div>
			<!-- End of column 2-->		
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="<?=Url::to('@web/')?>#">Weddings</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Accessible Travel</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Disney Parks</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Cruises</a></li>
					<li><a href="<?=Url::to('@web/')?>#">Round the World</a></li>
					<li><a href="<?=Url::to('@web/')?>#">First Class Flights</a></li>
				</ul>				
			</div>
			<!-- End of column 3-->		
			
			<div class="col-md-3 grey">
				<span class="ftitleblack">Newsletter</span>
				<div class="relative">
					<input type="email" class="form-control fccustom2black" id="exampleInputEmail1" placeholder="Enter email">
					<button type="submit" class="btn btn-default btncustom">Submit<img src="<?=Url::to('@web/')?>images/arrow.png" alt=""/></button>
				</div>
				<br/><br/>
				<span class="ftitleblack">Customer support</span><br/>
				<span class="pnr">1-866-599-6674</span><br/>
				<span class="grey2">office@travel.com</span>
			</div>			
			<!-- End of column 4-->			
		
			
		</div>	
	</div>
	
	<div class="footerbg3black">
		<div class="container center grey"> 
		<a href="<?=Url::to('@web/')?>#">Home</a> | 
		<a href="<?=Url::to('@web/')?>#">About</a> | 
		<a href="<?=Url::to('@web/')?>#">Last minute</a> | 
		<a href="<?=Url::to('@web/')?>#">Early booking</a> | 
		<a href="<?=Url::to('@web/')?>#">Special offers</a> | 
		<a href="<?=Url::to('@web/')?>#">Blog</a> | 
		<a href="<?=Url::to('@web/')?>#">Contact</a>
		<a href="<?=Url::to('@web/')?>#top" class="gotop scroll"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
		</div>
	</div>
	
	
	<!-- Javascript  -->
	<script src="<?=Url::to('@web/')?>assets/js/js-about.js"></script>
	
	<!-- Easy Pie Chart  -->
	<script src="<?=Url::to('@web/')?>assets/js/jquery.easy-pie-chart.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/jquery.customSelect.js'></script>
	
	<!-- Load Animo -->
	<script src="<?=Url::to('@web/')?>plugins/animo/animo.js"></script>

    <!-- Picker -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery-ui.js"></script>	

    <!-- Picker -->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>
  </body>
</html>
