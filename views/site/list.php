<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Kiralık Villam';
\Yii::$app->language = 'tr';
$asdf = \Yii::t('app', 'Hotels');
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

    <!-- Picker -->	
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/jquery-ui.css" />	
	
	
	<!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="<?=Url::to('@web/')?>plugins/jslider/css/jslider.css" type="text/css">
	<link rel="stylesheet" href="<?=Url::to('@web/')?>plugins/jslider/css/jslider.round.css" type="text/css">	
	

	
    <!-- jQuery -->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>
	
	<!-- bin/jquery.slider.min.js -->
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/jshashtable-2.1_src.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/jquery.numberformatter-1.2.3.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/tmpl.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/draggable-0.1.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>plugins/jslider/js/jquery.slider.js"></script>
	<!-- end -->
	
	
  </head>
  <body id="top" class="thebg" >
    
	
	
    <?php $this->beginContent('@app/views/layouts/header.php'); ?>
	<?php $this->endContent(); ?>
	
	
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="<?=Url::to('@web/')?>#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="<?=Url::to('@web/')?>#">Hotels</a></li>
					<li>/</li>
					<li><a href="<?=Url::to('@web/')?>#">U.S.A.</a></li>
					<li>/</li>					
					<li><a href="<?=Url::to('@web/')?>#" class="active">New York</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="<?=Url::to('@web/')?>#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">
		<div class="container pagecontainer offset-0">	

			<!-- FILTERS -->
			<div class="col-md-3 filters offset-0">
			
				
				<!-- TOP TIP -->
				<div class="filtertip">
					<div class="padding20">
						<p class="size13"><span class="size18 bold counthotel">53</span> <?=\Yii::t('app', 'Villas starting at');?></p>
						<p class="size30 bold"><span class="countprice"></span> TL<span class="size13"><?=(\Yii::$app->language=="tr" ? "'den başlayan fiyatlarla":"");?></span></p>
						<p class="size13"><?=\Yii::t('app', 'Narrow results or');?> <a href="#all"><?=\Yii::t('app', 'view all');?></a></p>
					</div>
					<div class="tip-arrow"></div>
				</div>
				
	

	
	
				<div class="bookfilters hpadding20">
					
						<div class="clearfix"></div><br/>
						
						<!-- HOTELS TAB -->
						<div class="hotelstab2 none">
							<span class="opensans size13"><?=\Yii::t('app', 'Villa name');?></span>
							<input type="text" class="form-control" placeholder="" value="<?=$model["name"]?>">
							
							<div class="clearfix pbottom15"></div>
							
							<div class="w50percent">
								<div class="wh90percent textleft">
									<span class="opensans size13"><?=\Yii::t('app', 'Check in date');?></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy" data-date="<?=$model["start"]?>"/>
								</div>
							</div>

							<div class="w50percentlast">
								<div class="wh90percent textleft right">
									<span class="opensans size13"><?=\Yii::t('app', 'Check out date');?></span>
									<input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy" data-date="<?=$model["end"]?>"/>
								</div>
							</div>
							
							<div class="clearfix pbottom15"></div>
							
							<div class="room1" >
							
								<div class="w50percent">
									<div class="wh90percent textleft">
												<span class="opensans size13"><b><?=\Yii::t('app', 'Adult');?></b></span>
												<select class="form-control mySelectBoxClass" id="formAdult">
												<?php
												for($i = 1; $i <= 5; $i++)
												{
													echo "<option ".($model["adult"] == $i ? "selected":"").">$i</option>";
												}
												?>
												</select>
									</div>
								</div>

								<div class="w50percentlast">	
									<div class="wh90percent textleft right">
											<span class="opensans size13"><b><?=\Yii::t('app', 'Child');?></b></span>
												<select class="form-control mySelectBoxClass" id="formChild">
												<?php
												for($i = 1; $i <= 5; $i++)
												{
													echo "<option ".($model["child"] == $i ? "selected":"").">$i</option>";
												}
												?>
												</select>
									</div>
								</div>
							</div>
							
							<div class="clearfix"></div>
							<button type="submit" class="btn-search3"><?=\Yii::t('app', 'Search');?></button>
						</div>
						<!-- END OF HOTELS TAB -->
						
				</div>
				<!-- END OF BOOK FILTERS -->	
				
				<div class="line2"></div>
				
				<div class="padding20title"><h3 class="opensans dark"><?=\Yii::t('app', 'Filters');?></h3></div>
				<div class="line2"></div>
				
				<!-- Price range -->					
				<button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse2">
				  <?=\Yii::t('app', 'Price range');?> <span class="collapsearrow"></span>
				</button>
					
				<div id="collapse2" class="collapse in">
					<div class="padding20">
						<div class="layout-slider wh100percent">
						<span class="cstyle09"><input id="Slider1" type="slider" name="price" value="1;1000" /></span>
						</div>
						<script type="text/javascript" >
						  jQuery("#Slider1").slider({ from: 0, to: 1000, step: 5, smooth: true, round: 0, dimension: "&nbsp;TL", skin: "round" });
						</script>
					</div>
				</div>
				<!-- End of Price range -->	
				
				<div class="line2"></div>
				
				<!-- bölgeler -->		
				<button type="button" class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapse3">
				 <?=\Yii::t('app', 'Region');?> <span class="collapsearrow"></span>
				</button>				
				
				<div id="collapse3" class="collapse">
					<div class="hpadding20">
						<div class="radio">
						  <label>
							<input type="radio" name="bolge" id="Acomodation1" value="Kalkan" checked>
							Kalkan
						  </label>
						</div>
						<div class="radio">
						  <label>
							<input type="radio" name="bolge" id="Acomodation2" value="Kaş">
							Kaş
						  </label>
						</div>
						</div>
					
					<div class="clearfix"></div>					
				</div>
				<!-- End of bölgeler -->
				
				<div class="line2"></div>
				
				<!-- Hotel Preferences -->
				<button type="button" class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapse4">
				  <?=\Yii::t('app', 'Villa Preferences');?> <span class="collapsearrow"></span>
				</button>	
				<div id="collapse4" class="collapse">
					<div class="hpadding20">
						
							<div class="mt5" >
									<div class="col-md-6  offset-0">
												<span class="opensans size13 left mt7"><?=\Yii::t('app', 'Floors');?></span>
									</div>
									<div class="col-md-6 offset-0">
												<select class="form-control mySelectBoxClass" id="floors" name="floors">
												<?php
												for($i = 1; $i <= 5; $i++)
												{
													echo "<option ".($model["child"] == $i ? "selected":"").">$i</option>";
												}
												?>
												</select>
									</div>
							</div>
						<div class="clearfix"></div>	

						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Private villa');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Inside site');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Private pool');?>

							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Shared pool');?>

							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Heated pool');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Closed pool');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Nature secured');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Curtain secured');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Sea view');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Nature view');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Private park');?>

							</label>
						</div>	
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Shared park');?>

							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Pet');?>

							</label>
						</div>	

					</div>
					<div class="clearfix"></div>		
				</div>
				<!-- End of Hotel Preferences -->
				
				<div class="line2"></div>
				
				<!-- iç donanım -->
				<button type="button" class="collapsebtn last collapsed" data-toggle="collapse" data-target="#collapse5">
				  <?=\Yii::t('app', 'İç Donanımlar');?> <span class="collapsearrow"></span>
				</button>	
				<div id="collapse5" class="collapse">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Dish washer');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Washer');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Fridge');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Oven');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Heater');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Microwave');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Kitchen tools');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Kettle');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Toast maker');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Toaster');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Iron');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Ironing table');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Hair dryer');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Safety box');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Fireplace');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Air conditioner');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Seating group');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Food table');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Television');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'DVD player');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Jacuzzi');?>
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><?=\Yii::t('app', 'Bathtub');?>
							</label>
						</div>
					</div>
					</div>
					<div class="clearfix"></div>		
				<!-- End of iç donanım -->
				
				<div class="line2"></div>
				<div class="clearfix"></div>
				<br/>
				<br/>
				<br/>
				
				
			</div>
			<!-- END OF FILTERS -->
			
			<!-- LIST CONTENT-->
			<div class="rightcontent col-md-9 offset-0">
			
				<div class="hpadding20">
					<!-- Top filters -->
					<div class="topsortby">
						<div class="col-md-4 offset-0">
								
								<div class="left mt7"><b>Sort by:</b></div>
								
								<div class="right wh70percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Guest rating</option>
									  <option>5 stars</option>
									  <option>4 stars</option>
									  <option>3 stars</option>
									  <option>2 stars</option>
									  <option>1 stars</option>
									</select>
								</div>

						</div>			
						<div class="col-md-4">
							<div class="w50percent">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Name</option>
									  <option>A to Z</option>
									  <option>Z to A</option>
									</select>
								</div>
							</div>
							<div class="w50percentlast">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
								</div>
							</div>					
						</div>
						<div class="col-md-4 offset-0">
							<button class="popularbtn left">Most Popular</button>
							<div class="right">
								<button class="gridbtn" onClick="window.open('list2.html','_self');">&nbsp;</button>
								<button class="listbtn active">&nbsp;</button>
								<button class="grid2btn" onClick="window.open('list3.html','_self');">&nbsp;</button>
							</div>
						</div>
					</div>
					<!-- End of topfilters-->
				</div>
				<!-- End of padding -->
				
				<br/><br/>
				<div class="clearfix"></div>
				

					<div class="offset-2" id="blank_list" style="display:none">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="<?=Url::to('@web/images/villa/b/')?>{picture}" data-footer="A custom footer text" data-title="{name}" data-gallery="multiimages" data-toggle="">
									<img src="<?=Url::to('@web/images/villa/t/')?>{picture}" alt=""/>
								</a>
								<!--a class="liover" href="<?=Url::to('@web/villa/')?>">
									<div class="liover"></div>
								</a-->
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel3">
								<div class="labelright">
									<!--img src="<?=Url::to('@web/')?>images/filter-rating-5.png" width="60" alt=""/><br/><br/><br/>
									<img src="<?=Url::to('@web/')?>images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/-->
									<span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey"><?=\Yii::t('app', 'night');?></span><br/><br/><br/>
									<span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey"><?=\Yii::t('app', 'night');?></span><br/><br/><br/>
									<form action="<?=Url::to('@web/villa/')?>{name}">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<b>{name}</b><br/><br/><br/>
									<p class="grey">
									{description}</p><br/>
									<ul class="hotelpreferences">
										<li class="icohp-internet" title="İnternet"></li>
										<li class="icohp-air"></li>
										<li class="icohp-pool"></li>
										<li class="icohp-childcare"></li>
										<li class="icohp-fitness"></li>
										<li class="icohp-breakfast"></li>
										<li class="icohp-parking"></li>
										<li class="icohp-pets"></li>
										<li class="icohp-spa"></li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>

				<div class="itemscontainer offset-1">
			
			<?php
				foreach($model["villas"] as $villa)
				{
					$data = json_decode($villa["data"], true);
					?>
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="<?=Url::to('@web/villa/').$data["name"]?>">
									<img src="<?=Url::to('@web/images/villa/t/').$data["pictures"][0]?>" alt=""/>
								</a>
								<!--a class="liover" href="<?=Url::to('@web/villa/').$data["name"]?>">
									<div class="liover"></div>
								</a-->
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel3">
								<div class="labelright">
									<!--img src="<?=Url::to('@web/')?>images/filter-rating-5.png" width="60" alt=""/><br/><br/><br/>
									<img src="<?=Url::to('@web/')?>images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Reviews</span><br/><br/-->
									<span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey"><?=\Yii::t('app', 'night');?></span><br/><br/><br/>
									<span class="green size18"><b>$36.00</b></span><br/>
									<span class="size11 grey"><?=\Yii::t('app', 'night');?></span><br/><br/><br/>
									<form action="<?=Url::to('@web/villa/').$data["name"]?>">
									 <button class="bookbtn mt1" type="submit">Book</button>	
									</form>			
								</div>
								<div class="labelleft2">			
									<b><?=$data["name"]?></b><br/><br/><br/>
									<p class="grey">
									<?=$data["description"]?></p><br/>
									<ul class="hotelpreferences">
										<li class="icohp-internet" title="İnternet"></li>
										<li class="icohp-air"></li>
										<li class="icohp-pool"></li>
										<li class="icohp-childcare"></li>
										<li class="icohp-fitness"></li>
										<li class="icohp-breakfast"></li>
										<li class="icohp-parking"></li>
										<li class="icohp-pets"></li>
										<li class="icohp-spa"></li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					<?php
					}
					?>
				</div>	
				<!-- End of offset1-->		

				<div class="hpadding20">
				
					<ul class="pagination-sm right paddingbtm20"></ul>
					
				</div>

			</div>
			<!-- END OF LIST CONTENT-->
			
		

		</div>
		<!-- END OF container-->
		
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
	



    <!-- Javascript -->	
    <script src="<?=Url::to('@web/')?>assets/js/js-list4.js"></script>	
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/jquery.customSelect.js'></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?=Url::to('@web/')?>js/lightbox.js'></script>	
	
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/jquery.twbsPagination.min.js'></script>	
	
    <!-- JS Ease -->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?=Url::to('@web/')?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Counter -->	
    <script src="<?=Url::to('@web/')?>assets/js/counter.js"></script>	
	
    <!-- Nicescroll  -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Picker -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery-ui.js"></script>
	
    <!-- Bootstrap -->	
    <script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>
  </body>
</html>
