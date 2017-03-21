<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Kiralık Villam';
//\Yii::$app->language = 'tr';
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	
    <!-- Bootstrap -->
    <link href="<?=Url::to('@web/')?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?=Url::to('@web/')?>assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- Carousel -->
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
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>rs-plugin/css/settings.css" media="screen" />

    <!-- Picker UI-->	
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/jquery-ui.css" />		
	
    <!-- jQuery -->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>

	
  </head>
  <body id="top">
	<!-- Top wrapper -->	
    <?php $this->beginContent('@app/views/layouts/header.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /Top wrapper -->	


	<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>

					<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="<?=Url::to('@web/')?>images/slider/slider-01.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								
								<span class="lato size28 slim caps white">Italy</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Rome</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	

					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						<img src="<?=Url::to('@web/')?>images/slider/slider-02.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">France</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Paris</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	
					
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="<?=Url::to('@web/')?>images/slider/slider-03.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Santorini</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>
					

				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>
		

		



	<!-- WRAP -->
	<div class="wrap cstyle03">
		
		<div class="container mt-200 z-index100">		
		  <div class="row">
			<div class="col-md-4">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<ul class="nav nav-tabs" id="myTab">
						<li onclick="mySelectUpdate()" class="active hidden"><a data-toggle="tab" href="#air"><span class="flight"></span> Air</a></li>
						<li onclick="mySelectUpdate()" class="hidden"><a data-toggle="tab" href="#hotel"><span class="hotel"></span>Hotel</a></li>
						<li onclick="mySelectUpdate()" class="hidden"><a data-toggle="tab" href="#car"><span class="car"></span>Car</a></li>
						<li onclick="mySelectUpdate()" class="hidden"><a data-toggle="tab" href="#vacations"><span class="suitcase"></span>Vacations</a></li>
					</ul>
					
					<div class="tab-content" id="myTabContent">
						<div id="hotel" class="tab-pane fade active in">

							<span class="opensans size18"><?=\Yii::t('app', 'Villa name');?></span>
							<input type="text" class="form-control" placeholder="" id="formname">
							
							<br/>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b><?=\Yii::t('app', 'Check in date');?></b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="<?=\Yii::t('app', 'dd/mm/yyyy');?>"/>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b><?=\Yii::t('app', 'Check out date');?></b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="<?=\Yii::t('app', 'dd/mm/yyyy');?>"/>
								</div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
							
								<div class="w50percent">
									<div class="wh90percent textleft">
												<span class="opensans size13"><b><?=\Yii::t('app', 'Adult');?></b></span>
												<select class="form-control mySelectBoxClass" id="formAdult">
												  <option>1</option>
												  <option selected>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
											<span class="opensans size13"><b><?=\Yii::t('app', 'Child');?></b></span>
												<select class="form-control mySelectBoxClass" id="formChild">
												  <option selected>0</option>
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
									</div>
								</div>
							</div>
							
							<div class="room2 none">
								<div class="clearfix"></div><div class="line1"></div>
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>ROOM 2</b></span><br/>
										<div class="addroom2 block grey"><a href="<?=Url::to('@web/')?>#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="<?=Url::to('@web/')?>#" onclick="removeroom2()" class="orange"><img src="<?=Url::to('@web/')?>images/delete.png" alt="delete"/></a></div>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<div class="w50percent">
											<div class="wh90percent textleft left">
												<span class="opensans size13"><b>Adult</b></span>
												<select class="form-control mySelectBoxClass">
												  <option>1</option>
												  <option>2</option>
												  <option selected>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>							
										<div class="w50percentlast">
											<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>0</option>
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>		

							<div class="room3 none">
								<div class="clearfix"></div><div class="line1"></div>
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>ROOM 3</b></span><br/>
										<div class="addroom3 block grey"><a href="<?=Url::to('@web/')?>#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="<?=Url::to('@web/')?>#" onclick="removeroom3()" class="orange"><img src="<?=Url::to('@web/')?>images/delete.png" alt="delete"/></a></div>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<div class="w50percent">
											<div class="wh90percent textleft left">
												<span class="opensans size13"><b>Adult</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>							
										<div class="w50percentlast">
											<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>0</option>
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>	

						
						</div>
						<!--End of 1st tab -->
						
						<div id="air" class="tab-pane fade">
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Flying from</b></span>
									<input type="text" class="form-control" placeholder="City or airport">
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>To</b></span>
									<input type="text" class="form-control" placeholder="City or airport">
								</div>
							</div>
							
							
							<div class="clearfix"></div><br/>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Departing</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Returning</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy"/>
								</div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Adult</b></span>
										<select class="form-control mySelectBoxClass">
										  <option>1</option>
										  <option selected>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										</select>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Child</b></span>
										<select class="form-control mySelectBoxClass">
										  <option>0</option>
										  <option selected>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										</select>
									</div>
								</div>
							</div>
							
						</div>
						<!--End of 2nd tab -->
						
						<div id="car" class="tab-pane fade">

							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Picking up</b></span>
									<input type="text" class="form-control" placeholder="Airport, address">
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Dropping off</b></span>
									<input type="text" class="form-control" placeholder="Airport, address">
								</div>
							</div>
							
							
							<div class="clearfix"></div><br/>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Pick up date</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy"/>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Hour</b></span>
									<select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									  <option>12:30 AM</option>
									  <option>01:00 AM</option>
									  <option>01:30 AM</option>
									  <option>02:00 AM</option>
									  <option>02:30 AM</option>
									  <option>03:00 AM</option>
									  <option>03:30 AM</option>
									  <option>04:00 AM</option>
									  <option>04:30 AM</option>
									  <option>05:00 AM</option>
									  <option>05:30 AM</option>
									  <option>06:00 AM</option>
									  <option>06:30 AM</option>
									  <option>07:00 AM</option>
									  <option>07:30 AM</option>
									  <option>08:00 AM</option>
									  <option>08:30 AM</option>
									  <option>09:00 AM</option>
									  <option>09:30 AM</option>
									  <option>10:00 AM</option>
									  <option selected>10:30 AM</option>
									  <option>11:00 AM</option>
									  <option>11:30 AM</option>
									  <option>12:00 PM</option>
									  <option>12:30 PM</option>								  
									  <option>01:00 PM</option>
									  <option>01:30 PM</option>
									  <option>02:00 PM</option>
									  <option>02:30 PM</option>
									  <option>03:00 PM</option>
									  <option>03:30 PM</option>
									  <option>04:00 PM</option>
									  <option>04:30 PM</option>
									  <option>05:00 PM</option>
									  <option>05:30 PM</option>
									  <option>06:00 PM</option>
									  <option>06:30 PM</option>
									  <option>07:00 PM</option>
									  <option>07:30 PM</option>
									  <option>08:00 PM</option>
									  <option>08:30 PM</option>
									  <option>09:00 PM</option>
									  <option>09:30 PM</option>
									  <option>10:00 PM</option>
									  <option>10:30 PM</option>
									  <option>11:00 PM</option>
									  <option>11:30 PM</option>								  
									</select>
								</div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>Drop off date</b></span>
										<input type="text" class="form-control mySelectCalendar" id="datepicker6" placeholder="mm/dd/yyyy"/>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<span class="opensans size13"><b>Hour</b></span>
										<select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									  <option>12:30 AM</option>
									  <option>01:00 AM</option>
									  <option>01:30 AM</option>
									  <option>02:00 AM</option>
									  <option>02:30 AM</option>
									  <option>03:00 AM</option>
									  <option>03:30 AM</option>
									  <option>04:00 AM</option>
									  <option>04:30 AM</option>
									  <option>05:00 AM</option>
									  <option>05:30 AM</option>
									  <option>06:00 AM</option>
									  <option>06:30 AM</option>
									  <option>07:00 AM</option>
									  <option>07:30 AM</option>
									  <option>08:00 AM</option>
									  <option>08:30 AM</option>
									  <option>09:00 AM</option>
									  <option>09:30 AM</option>
									  <option>10:00 AM</option>
									  <option selected>10:30 AM</option>
									  <option>11:00 AM</option>
									  <option>11:30 AM</option>
									  <option>12:00 PM</option>
									  <option>12:30 PM</option>								  
									  <option>01:00 PM</option>
									  <option>01:30 PM</option>
									  <option>02:00 PM</option>
									  <option>02:30 PM</option>
									  <option>03:00 PM</option>
									  <option>03:30 PM</option>
									  <option>04:00 PM</option>
									  <option>04:30 PM</option>
									  <option>05:00 PM</option>
									  <option>05:30 PM</option>
									  <option>06:00 PM</option>
									  <option>06:30 PM</option>
									  <option>07:00 PM</option>
									  <option>07:30 PM</option>
									  <option>08:00 PM</option>
									  <option>08:30 PM</option>
									  <option>09:00 PM</option>
									  <option>09:30 PM</option>
									  <option>10:00 PM</option>
									  <option>10:30 PM</option>
									  <option>11:00 PM</option>
									  <option>11:30 PM</option>		
										</select>
									</div>
								</div>
							</div>
						
						</div>
						<!--End of 3rd tab -->
						
						<div id="vacations" class="tab-pane fade">

							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Flying from</b></span>
									<input type="text" class="form-control" placeholder="City or airport">
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>To</b></span>
									<input type="text" class="form-control" placeholder="City or airport">
								</div>
							</div>
							
							<div class="clearfix"></div><br/>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><b>Check in date</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker7" placeholder="mm/dd/yyyy"/>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><b>Check in date</b></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker8" placeholder="mm/dd/yyyy"/>
								</div>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="room1 margtop15">
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>ROOM 1</b></span><br/>
										
										<div class="addroom1 block"><a href="<?=Url::to('@web/')?>#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<div class="w50percent">
											<div class="wh90percent textleft left">
												<span class="opensans size13"><b>Adult</b></span>
												<select class="form-control mySelectBoxClass">
												  <option>1</option>
												  <option selected>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>							
										<div class="w50percentlast">
											<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
												<select class="form-control mySelectBoxClass">
												  <option>0</option>
												  <option selected>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="room2 none">
								<div class="clearfix"></div><div class="line1"></div>
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>ROOM 2</b></span><br/>
										<div class="addroom2 block grey"><a href="<?=Url::to('@web/')?>#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="<?=Url::to('@web/')?>#" onclick="removeroom2()" class="orange"><img src="<?=Url::to('@web/')?>images/delete.png" alt="delete"/></a></div>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<div class="w50percent">
											<div class="wh90percent textleft left">
												<span class="opensans size13"><b>Adult</b></span>
												<select class="form-control mySelectBoxClass">
												  <option>1</option>
												  <option>2</option>
												  <option selected>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>							
										<div class="w50percentlast">
											<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>0</option>
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>		

							<div class="room3 none">
								<div class="clearfix"></div><div class="line1"></div>
								<div class="w50percent">
									<div class="wh90percent textleft">
										<span class="opensans size13"><b>ROOM 3</b></span><br/>
										<div class="addroom3 block grey"><a href="<?=Url::to('@web/')?>#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="<?=Url::to('@web/')?>#" onclick="removeroom3()" class="orange"><img src="<?=Url::to('@web/')?>images/delete.png" alt="delete"/></a></div>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
										<div class="w50percent">
											<div class="wh90percent textleft left">
												<span class="opensans size13"><b>Adult</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>							
										<div class="w50percentlast">
											<div class="wh90percent textleft right">
											<span class="opensans size13"><b>Child</b></span>
												<select class="form-control mySelectBoxClass">
												  <option selected>0</option>
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>	
						
						</div>
						<!--End of 4th tab -->
					</div>
					
					<div class="searchbg">
						<form action="<?=Url::to('@web/')?>list" method="get">
							<!--input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" /-->
							<input type="hidden" name="n" id="villa_name" />
							<input type="hidden" name="sd" id="start_date" />
							<input type="hidden" name="ed" id="end_date" />
							<input type="hidden" name="a" id="adult" />
							<input type="hidden" name="c" id="child" />
						<button type="submit" class="btn-search"><?=\Yii::t('app', 'Search');?></button>
						</form>
					</div>
						
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one">
					<a href="<?=Url::to('@web/villa/')?>">
						<img src="<?=Url::to('@web/')?>images/villa/thumbnails/begonvil-01.JPG" alt="" />
							<div class="mhover none"><span class="icon"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></span></div>
					</a>
					</div>
					<div class="ctitle">Cote d'azur<a href="<?=Url::to('@web/villa')?>"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
						<span>$59.99</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one">
					<a href="<?=Url::to('@web/villa/')?>">
						<img src="<?=Url::to('@web/')?>images/villa/thumbnails/begonvil-02.JPG" alt="" />
							<div class="mhover none"><span class="icon"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></span></div>
					</a>
					</div>
					<div class="ctitle">Cote d'azur<a href="<?=Url::to('@web/villa')?>"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
						<span>$59.99</span>
					</div>
				</div>			
			</div>
		  </div>
		</div>
		

		
		<!--div class="lastminute lcfix">
			<div class="container lmc">	
				<img src="<?=Url::to('@web/')?>images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="details.html" >
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div-->
		

		
		
		<!-- FOOTER -->
		
		<div class="footerbg sfix">
			<div class="container">		
				<footer>
					<div class="footer">
						<a href="https://www.facebook.com/kiralikvillam" class="social1"><img src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a>
						<a href="https://twitter.com/kiralikvillam" class="social2"><img src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a>
						<a href="https://instagram.com/kiralikvillam" class="social4"><img src="<?=Url::to('@web/')?>images/icon-instagram.png" alt=""/></a>
						<br/><br/>
						Copyright &copy; 2017 Tüm hakları saklıdır.
						<br/><br/>
						<a href="<?=Url::to('@web/')?>#top" id="gotop2" class="gotop"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
					</div>
				</footer>
			</div>	
		</div>
		
		

		
		
	</div>
	<!-- END OF WRAP -->
	
	
	

    <!-- Javascript -->
	
    <!-- This page JS -->
	<script src="<?=Url::to('@web/')?>assets/js/js-index.js"></script>	
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery-ui.js"></script>	
	<script src="<?=Url::to('@web/')?>assets/js/datepicker-tr.js"></script>		
	
	<!-- Easing -->
    <script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?=Url::to('@web/')?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
   <!-- Nicescroll  -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="<?=Url::to('@web/')?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>
  </body>
</html>
