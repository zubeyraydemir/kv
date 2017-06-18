<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$data = json_decode($villa["data"], true);
$this->title = 'Kiralık Villam - ' . $data["name"];

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
    <link href="<?=Url::to('@web/')?>assets/css/daterangepicker.css" rel="stylesheet" media="screen">


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
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/owl.carousel.css" />	
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/photoswipe.css" />	
	<link rel="stylesheet" href="<?=Url::to('@web/')?>assets/css/default-skin/default-skin.css" />	
	
	<!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="<?=Url::to('@web/')?>plugins/jslider/css/jslider.css" type="text/css">
	<link rel="stylesheet" href="<?=Url::to('@web/')?>plugins/jslider/css/jslider.round-blue.css" type="text/css">
	
    <!-- jQuery-->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/jquery-ui.js"></script>	
	
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
	<!-- Top wrapper -->	
    <?php $this->beginContent('@app/views/layouts/header.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /Top wrapper -->	
	
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="<?=Url::to('@web/')?>#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="<?=Url::to('@web/villalar')?>"><?=\Yii::t('app', 'Villas');?></a></li>
					<li>/</li>
					<li><a href="<?=Url::to('@web/villa').$villa["name"]?>"><?=$data["name"]?></a></li>				
				</ul>				
			</div>
			<a class="backbtn right" href="<?=Url::to('@web/villalar')?>"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">
		<div class="container pagecontainer offset-0">	

			<!-- SLIDER -->
			<div class="col-md-8 details-slider">
			
				<div id="c-carousel">
				<div id="wrapper">
					<img src="<?=Url::to('@web/')?>images/zoom.png" style="position:absolute;z-index:2; margin: 5px; width:25px;opacity: .5;cursor:pointer" onclick="openPhotoSwipe();">
				<div id="inner">
					<div class="owl-carousel">
						
							<?php
							foreach ($data["pictures"] as $pic)
							{
								?>
									<div class="item">
										<img src="<?=Url::to('@web/')?>images/villa/b/<?=$pic?>" alt="">
									</div>
								<?php
							}
							?>
					</div>
					<!--div id="caroufredsel_wrapper2">
						<div id="carousel" class="hasan">
							<?php
							foreach ($data["pictures"] as $pic)
							{
								?>
									<img src="<?=Url::to('@web/')?>images/villa/b/<?=$pic?>" alt=""/>
								<?php
							}
							?>
						</div>
					</div>
					<div id="pager-wrapper">
						<div id="pager">
							<?php
							foreach ($data["pictures"] as $pic)
							{
								?>
									<img src="<?=Url::to('@web/')?>images/villa/b/<?=$pic?>"  height="68" alt=""/>
								<?php
							}
							?>
						</div>
					</div>
					
					<div id="caroufredsel_wrapper2">
						<div id="carousel">
							<img src="<?=Url::to('@web/')?>images/details-slider/slide1.jpg" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide2.jpg" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide3.jpg" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide4.jpg" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide5.jpg" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide6.jpg" alt=""/>						
						</div>
					</div>
					<div id="pager-wrapper">
						<div id="pager">
							<?php
							?>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide1.jpg" width="120" height="68" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide2.jpg" width="120" height="68" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide3.jpg" width="120" height="68" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide4.jpg" width="120" height="68" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide5.jpg" width="120" height="68" alt=""/>
							<img src="<?=Url::to('@web/')?>images/details-slider/slide6.jpg" width="120" height="68" alt=""/>						
						</div>
					</div-->
				</div>
				<div class="clearfix"></div>	
					
		</div>
		</div> <!-- /c-carousel -->
			
			
			
			
			
			</div>
			<!-- END OF SLIDER -->			
			
			<!-- RIGHT INFO -->
			<div class="col-md-4 detailsright offset-0">
				<div class="padding20">
					<h4 class="lh1"><?=$data["name"]?></h4>
					<img src="<?=Url::to('@web/')?>images/smallrating-5.png" alt=""/>
				</div>
				
				<div class="line3"></div>
				
				<div class="hpadding20">
					<?php
					$available = true;
					if (isset($start))
					{
						foreach ($res as $r)
						{
							if (($r["start_date"] <= $start && $r["end_date"] > $start || $r["start_date"] < $end && $r["end_date"] >= $end) 
								|| ($start <= $r["start_date"] && $end >= $r["end_date"]  ))
								$available = false;
						}
					}
					?>
					
					<?php
					if ($available)
					{
						echo isset($start) ? '<h2 class="opensans slim green2">Harika!</h2>Seçtiğiniz tarihlerde rezervasyon yapabilirsiniz.' : '<p class="padding20">Fiyat seçeneklerini görmek için tarih seçiniz<br><span class="green">Fiyat ve rezervasyon durumunu görmek için <b>Rezervasyon Yap</b>\'a tıklayınız</span></p>';
					}
					else
					{
						echo '<h2 class="opensans slim red">Üzgünüz!</h2>Seçtiğiniz tarihlerde villamız dolu.';
					}
					$resavail = $available;
					?>
				</div>
				
				<div class="line3 margtop20"></div>
				<form id="updateform" action="<?=Url::to('@web/villa/').$villa["name"]?>" method="post">
							<input type="hidden" name="sd" id="start_date" />
							<input type="hidden" name="ed" id="end_date" />
							<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
				<div class="col-md-12 bordertype3 padding20">
					<?php
					$pridesc = "";
					//echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
					$minpri = 99999;
					$pre_payment = 0;
					if (count($prices) > 0)
					{
						if (isset($start))
						{
							$date = new DateTime($start);
							$total_price = 0;
							$price_found = 0;
							while ($date->format("Y-m-d") < $end)
							{
								foreach($prices as $price)
								{
									if ($price["start_date"] <= $date->format("Y-m-d") && $price["end_date"] >= $date->format("Y-m-d"))
									{
										$total_price += $price["price"];
										$price_found++;
										break;
									}
								}
								$date->add(new DateInterval('P1D')); 
							}
						}
						foreach($prices as $price)
						{
							if ($minpri > $price["price"])
								$minpri = $price["price"];
						}
						if (isset($total_price) && isset($data["pre_payment"]))
						{
							$pre_payment = round($data["pre_payment"] * $total_price / 100);
						}
						if (isset($start))
						{
							$date1 = new DateTime($start);
							$date2 = new DateTime($end);
							$interval = $date1->diff($date2);
							if ($available)
							{
								if ($price_found == $interval->d)
								{
									echo "<div class='col-md-4'>". $interval->d. " gecelik <br>konaklama<br></div>";
									echo "<div class='col-md-8'><span class='green size30'>". $total_price." ". strtoupper($data["currency"])."</span> </div>";
								}
								else
								{
									echo "Girdiğiniz tarihler arasında fiyat bilgisi eksik. Rezervasyon talebi yaparak veya bizi arayarak fiyat hakkında bilgi alabilirsiniz";
								}
							}
							else
							{
								echo '<p class=""><span class="green">Fiyat ve rezervasyon durumunu görmek için <b>Rezervasyon Yap</b>\'a tıklayınız</span></p>';
							}
							
						}
						else
						{
							echo "<p>Gecelik en düşük <span class='green size20'>$minpri ". strtoupper($data["currency"]) ."</span>'den başlayan fiyatlarla rezervasyon yapabilirsiniz.</p><br>";
						}

					}
					else
					{
						echo "Girdiğiniz tarihler arasında fiyat bilgisi bulunamadı. Rezervasyon talebi yaparak veya bizi arayarak fiyat hakkında bilgi alabilirsiniz";
					}
					?>
				</div>
				<div class="clearfix"></div><br/>
				
				<div class="hpadding20">
					<input type="text" class="form-control mySelectCalendar" id="daterangepicker" data-sdate="<?=isset($start)?$start:""?>" data-edate="<?=isset($end)?$end:""?>"/>
					<br>
					<a id="updateDate" href="javascript:void(0)" class="add2fav margtop5"><?=\Yii::t('app', 'Update date');?></a>
					<a href="javascript:void(0)" class="booknow margtop20 btnmarg" onclick="$('html, body').animate({ scrollTop: 650 }, 'slow');$('.nav-tabs a[href=#roomrates]').tab('show');"><?=\Yii::t('app', 'Book now');?></a>
				</div>
				</form>
			</div>
			<!-- END OF RIGHT INFO -->

		</div>
		<!-- END OF container-->
		
		<div class="container mt25 offset-0">

			<div id="tabs" class="col-md-8 pagecontainer2 offset-0">
				<div class="cstyle10"></div>
		
				<ul class="nav nav-tabs" id="myTab">
					<li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#summary"><span class="summary"></span><span class=""><?=\Yii::t('app', 'About');?></span>&nbsp;</a></li>
					<li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#roomrates"><span class="rates"></span><span class=""><?=\Yii::t('app', 'Reservation');?></span>&nbsp;</a></li>
					<!--li onclick="loadScript()" class=""><a data-toggle="tab" href="#maps"><span class="maps"></span><span class="hidetext"><?=\Yii::t('app', 'Maps');?></span>&nbsp;</a></li-->
					<!--li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#thingstodo"><span class="thingstodo"></span><span class="hidetext"><?=\Yii::t('app', 'Things to do');?></span>&nbsp;</a></li-->
					<!--li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences"><span class="preferences"></span><span class="hidetext">Preferences</span>&nbsp;</a></li>
					<!-li onclick="mySelectUpdate(); trigerJslider(); trigerJslider2(); trigerJslider3(); trigerJslider4(); trigerJslider5(); trigerJslider6();" class=""><a data-toggle="tab" href="#reviews"><span class="reviews"></span><span class="hidetext">Reviews</span>&nbsp;</a></li-->
					
				</ul>			
				<div class="tab-content4" >
					<!-- TAB 1 -->				
					<div id="summary" class="tab-pane fade active in">
						<div class="hpadding20">
							<?=$data["description"]?>
						</div>
						<div class="line4"></div>								

						<!-- Collapse 6 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse6">
						  <?=\Yii::t('app', 'Villa Amenities');?> <span class="collapsearrow"></span>
						</button>
						<?php
						$allprop = ["private_villa",
							"inside_site",
							"private_pool",
							"shared_pool",
							"heated_pool",
							"closed_pool",
							"natural_secured",
							"curtain_secured",
							"sea_view",
							"nature_view",
							"private_parking",
							"shared_parking",
							"pet_allowed",
							"dish_washer",
							"washer",
							"fridge",
							"oven",
							"heater",
							"microwave",
							"kitchen_tools",
							"kettle",
							"toast_maker",
							"toaster",
							"iron",
							"ironing_table",
							"hair_dryer",
							"safety_box",
							"fireplace",
							"air_conditioner",
							"seating_group",
							"food_table",
							"television",
							"dvd_player",
							"jacuzzi",
							"bathtub",
							"pool",
							"child_pool",
							"camelia",
							"barbeque",
							"sunbed",
							"umbrella",
							"water",
							"gas",
							"electricity",
							"limited_electricity",
							"wireless"
						];
						$available = [];
						foreach ($allprop as $prop)
						{
							if (isset($data[$prop]))
								$available[] = $prop;
						}
						$perblock = ceil(count($available) / 3);
						?>
						<div id="collapse6" class="collapse in">
							<div class="hpadding20">
								<div class="col-md-4">
									<ul class="checklist">
										<?php
										for ($i = 0; $i < $perblock; $i++)
										{
											echo "<li>".\Yii::t("app", $available[$i])."</li>";
										}
										?>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="checklist">
										<?php
										for ($i = $perblock; $i < $perblock*2; $i++)
										{
											echo "<li>".\Yii::t("app", $available[$i])."</li>";
										}
										?>
									</ul>									
								</div>	
								<div class="col-md-4">
									<ul class="checklist">								
										<?php
										for ($i = $perblock*2; $i < count($available); $i++)
										{
											echo "<li>".\Yii::t("app", $available[$i])."</li>";
										}
										?>
									</ul>									
								</div>									
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 6 -->								
				
					</div>
					<!-- TAB 2 -->
					<div id="roomrates" class="tab-pane fade ">
						<form id="resForm" action="<?=Url::to('@web/')?>reservation" method="post">
							<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
							<input type="hidden" name="sd" />
							<input type="hidden" name="ed" />
							<input type="hidden" name="id" value="<?=$villa["id"]?>" />
							<input type="hidden" name="vname" value="<?=$data["name"]?>" />
							<input type="hidden" name="avail" value="<?=isset($resavail) ? "1" : "0"?>"/>
							<input type="hidden" name="price" value="<?=isset($total_price) ? $total_price : "-1"?>" />
							<input type="hidden" name="payment" value="<?=isset($pre_payment) ? $pre_payment : "0"?>" />
							
							<div class="col-md-6">
								<div class="hpadding20">
									<p class="dark">Rezervasyon bilgileriniz</p>
									<div class="col-md-4 offset-0">
										</div>
									<div class="col-md-8 offset-0"> 
										<?=$resavail ? "" : '<h2 class="opensans slim red">Üzgünüz!</h2>Seçtiğiniz tarihlerde villamız dolu gözüküyor.<br>' ?>
										<input type="text" class="form-control mySelectCalendar" id="daterangepicker2" data-sdate="<?=isset($start)?$start:""?>" data-edate="<?=isset($end)?$end:""?>"/>
										
									</div>
									<div class="col-md-4 offset-0">
										</div>
									<div class="col-md-8 offset-0">
										
											<button id="updateDate2" class="updatebtn caps center"><?=\Yii::t("app","Update")?></button>
									
									</div>
									<div class="clearfix"></div>
								</div>
								<br/><br/>
								
								<div class="col-md-4 textright">
									<div class="margtop15"><span class="dark"><?=\Yii::t("app","Contact Name")?>:</span><span class="red">*</span></div>
								</div>
								<div class="col-md-8"> 
									<input type="text" class="form-control " name="name" placeholder="" required="true">
								</div>
								<div class="col-md-8 textleft margtop15">
								</div>
								<div class="clearfix"></div>
								
								<br/>
								<div class="col-md-4 textright">
									<div class="margtop7"><span class="dark"><?=\Yii::t("app","Email Address")?>:</span><span class="red">*</span></div>
								</div>
								<div class="col-md-8 textleft">
									<input type="email" class="form-control" name="mail" required="true" placeholder="">
								</div>
								<div class="clearfix"></div>
								
								<br/>
								<div class="col-md-4 textright">
									<div class="margtop7"><span class="dark"><?=\Yii::t("app","Phone Number")?>:</span><span class="red">*</span></div>
								</div>
								<div class="col-md-8 textleft">
									<input type="text" class="form-control" name="phone" required="true" placeholder="">
								</div>
								<div class="clearfix"></div>
								
								<br/>
								<div class="col-md-4 textright">
									<div class="margtop7"><span class="dark"><?=\Yii::t("app","Additional notes")?>:</span></div>
								</div>
								<div class="col-md-8 textleft">
									<input type="text" class="form-control" name="note" placeholder="">
								</div>
								<div class="clearfix"></div>

								<br/>
								<div class="col-md-4 textright"></div>
								<div class="col-md-8 textright">
										<label><input type="checkbox" style="" required="true"> <a href="<?=Url::to('@web/sozlesme/kiralama_genel_kosullari.pdf')?>" target="_blank" class="blue"><u>Kiralama koşullarını</u></a> okudum, onaylıyorum</label>
									
								</div>
								<?php
								if ($pre_payment > 0) { 
								?>
								<div class="col-md-4 textright">
									<div class="margtop7"><span class="dark"><?=\Yii::t("app","Pre payment")?>:</span><span class="red"></span></div>
								</div>
								<div class="col-md-8 textright">
									<span class='green size30'><?=$pre_payment?> <?=strtoupper($data["currency"])?></span>
								</div>
								<?php }
								if (isset($total_price)) { ?>
								<div class="col-md-4 textright">
									<div class="margtop7"><span class="dark"><?=\Yii::t("app","Total price")?>:</span><span class="red"></span></div>
								</div>
								<div class="col-md-8 textright">
									<span class='green size30'><?=$total_price?> <?=strtoupper($data["currency"])?></span>
								</div>
								<?php } ?>
								<div class="col-md-4 textright"></div>
								<div class="col-md-8 textright">
										<input type="submit"  class="booknow margtop20 btnmarg" value="<?=\Yii::t('app', 'Complete Reservation');?>">
									
								</div>
							</div>
							<div class="col-md-6">
							</div>
							<div class="clearfix"></div>
						</form>
						<br/>
						
											
						<div class="line2"></div>
						<h2 class="hpadding20 dark"><?=\Yii::t("app", "Price table")?></h2>	
						<div class="col-md-12">
							<div class="table-responsive">
								<br>
						<table class="pricedate">
							<thead>
								<tr>
									<th><?=\Yii::t("app", "Month/Day")?></th>
									<?php
									for ($i = 1; $i <= 31; $i++)
									{
										echo "<th>$i</th>";
									}
									?>
								</tr>
							</thead>
							<tbody>
							<?php
				
							$months = array("", "OCAK", "ŞUBAT", "MART", "NİSAN", "MAYIS", "HAZİRAN", "TEMMUZ", "AĞUSTOS", "EYLÜL", "EKİM", "KASIM", "ARALIK");
							$today = date("Y-m-d");
							$reserves = $res;
							
							$date = new DateTime(date(date('Y')."-01-01"));
							$end_date = date((date('Y')+1)."-01-01");
							$reserveCount = 0;
							$priceCount = 0;
							$currmonth = 0;
							$price = "";
							while ($date->format("Y-m-d") < $end_date)
							{ 
								if (count($prices) - 1 >= $priceCount)
								{
									if ($date->format("Y-m-d") >= $prices[$priceCount]["start_date"] && $date->format("Y-m-d") <= $prices[$priceCount]["end_date"])
									{
										$price = $prices[$priceCount]["price"];
									}
									else
									{
										if ($date->format("Y-m-d") > $prices[$priceCount]["end_date"])
										{
											$priceCount++;
											if ($priceCount >= count($prices))
											{
												$price = "";
											}
											else if ($date->format("Y-m-d") >= $prices[$priceCount]["start_date"] && $date->format("Y-m-d") <= $prices[$priceCount]["end_date"])
											{
												$price = $prices[$priceCount]["price"];
											}	
											else
												$price = "";
										}
									}
								}
								if ($currmonth != $date->format("m")*1)
								{
									if ($currmonth > 0)
									{
										echo "$bot";
										for ($i=$lastday;$i<31;$i++)
										{
											echo "<td style='border: 0px'></td>";
										}
										echo "</tr>";
									}
									$currmonth = $date->format("m")*1;
									$bot = "<tr><td>" . $months[$currmonth] . "</td>";
								}
								$day = $price;//$date->format("d");
								$lastday = $date->format("d") * 1;
								//$bot .= "<td>$day</td>";
								if ($date->format("Y-m-d") < $today)
								{
								$bot .= "<td bgcolor='#ddd'></td>";
								}
								else
								{
									if (count($reserves) > 0)
									{
										if (count($reserves) > $reserveCount)
										{
											if ($date->format("Y-m-d") >= $reserves[$reserveCount]["start_date"])
											{
												if ($date->format("Y-m-d") <= $reserves[$reserveCount]["end_date"])
												{
													if ($date->format("Y-m-d") == $reserves[$reserveCount]["start_date"])
														$bot .= "<td style='background: linear-gradient(-45deg, #2c8fc9, #2c8fc9 49%, transparent 51%, transparent)' data-a=1>$day</td>";
													else if ($date->format("Y-m-d") == $reserves[$reserveCount]["end_date"])
														$bot .= "<td style='background: linear-gradient(135deg, #2c8fc9, #2c8fc9 49%, transparent 51%, transparent)' data-a=1>$day</td>";
													else
														$bot .= "<td bgcolor='#2c8fc9' data-a=1>$day</td>";
												}
												else
												{
													$reserveCount++;
													
													if ((count($reserves) > $reserveCount) && $date->format("Y-m-d") >= $reserves[$reserveCount]["start_date"])
														$bot .= "<td bgcolor='#2c8fc9' data-a=2>$day</td>";
													else
														$bot .= "<td data-a=3>$day</td>";
												}
											}
											else
									$bot .= "<td data-a=4>$day</td>";
										}
										else
									$bot .= "<td data-a=5>$day</td>";
									} 
									else
									$bot .= "<td data-a=6>$day</td>";
								}
								$date->add(new DateInterval('P1D'));
							}
							echo "</table>";
							?>
							</tbody>
						</table>
						</div>
						<br>
							<p style="border: 1px solid; background-color: #2c8fc9; color: black; float:left; padding:5px; margin:10px;">Dolu</p>
							<p style="border: 1px solid; color: black; float:left; padding:5px; margin:10px;">Boş</p>
							
							<p style="background: linear-gradient(-45deg, #2c8fc9, #2c8fc9 49%, transparent 51%, transparent);border: 1px solid; color: black; float:left; padding:5px; margin:10px;">Giriş</p>
							<p style="background: linear-gradient(135deg, #2c8fc9, #2c8fc9 49%, transparent 51%, transparent);border: 1px solid; color: black; float:left; padding:5px; margin:10px;">Çıkış</p>
						
						</div>
						<div class="line2"></div>							
						
					</div>
					
					<!-- TAB 3 -->					
					<div id="preferences" class="tab-pane fade">
						<p class="hpadding20">
						The hotel offers a snack bar/deli. A bar/lounge is on site where guests can unwind with a drink. Guests can enjoy a complimentary breakfast. An Internet point is located on site and high-speed wireless Internet access is complimentary.
						</p>
						
						<div class="line4"></div>
						
						<!-- Collapse 7 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse7">
						  Hotel facilities <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse7" class="collapse in">
							<div class="hpadding20">
								
								<div class="col-md-4 offset-0">
									<ul class="hotelpreferences2 left">
										<li class="icohp-internet"></li>
										<li class="icohp-air"></li>
										<li class="icohp-pool"></li>
										<li class="icohp-childcare"></li>
										<li class="icohp-fitness"></li>
										<li class="icohp-breakfast"></li>
										<li class="icohp-parking"></li>
										<li class="icohp-pets"></li>
										<li class="icohp-spa"></li>
										<li class="icohp-hairdryer"></li>
									</ul>
									<ul class="hpref-text left">
										<li>High-speed Internet</li>
										<li>Air conditioning</li>
										<li>Swimming pool</li>
										<li>Childcare</li>
										<li>Fitness equipment</li>
										<li>Free breakfast</li>
										<li>Free parking</li>
										<li>Pets allowed</li>
										<li>Spa services on site</li>
										<li>Hair dryer</li>
									</ul>
								</div>

						
								<div class="col-md-4 offset-0">	
									<ul class="hotelpreferences2 left">
										<li class="icohp-garden"></li>
										<li class="icohp-grill"></li>
										<li class="icohp-kitchen"></li>
										<li class="icohp-bar"></li>
										<li class="icohp-living"></li>
										<li class="icohp-tv"></li>
										<li class="icohp-fridge"></li>
										<li class="icohp-microwave"></li>
										<li class="icohp-washing"></li>
										<li class="icohp-roomservice"></li>
									</ul>
									<ul class="hpref-text left">
										<li>Courtyard garden</li>
										<li>Grill / Barbecue</li>
										<li>Kitchen</li>
										<li>Bar</li>
										<li>Living</li>
										<li>TV</li>
										<li>Fridge</li>
										<li>Microwave</li>
										<li>Washing maschine</li>
										<li>Room service</li>
									</ul>		
								</div>		
								<div class="col-md-4 offset-0">	
									<ul class="hotelpreferences2 left">
										<li class="icohp-safe"></li>
										<li class="icohp-playground"></li>
										<li class="icohp-conferenceroom"></li>										
									</ul>
									<ul class="hpref-text left">
										<li>Reception Safe</li>
										<li>Playground</li>
										<li>Conference room</li>
									</ul>										
								</div>									
								<div class="clearfix"></div>
							</div>
							
						</div>
						<!-- End of collapse 7 -->		
						<br/>
						<div class="line4"></div>							
						
						<!-- Collapse 8 -->	
						<button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse8">
						  <?=\Yii::t("app", "Villa facilities")?> <span class="collapsearrow"></span>
						</button>
						
						<div id="collapse8" class="collapse in">
							<div class="hpadding20">
								<div class="col-md-4">
									<ul class="checklist">
										<li>Climate control</li>
										<li>Air conditioning</li>
										<li>Direct-dial phone</li>
										<li>Minibar</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="checklist">
										<li>Wake-up calls</li>
										<li>Daily housekeeping</li>
										<li>Private bathroom</li>
										<li>Hair dryer</li>	
									</ul>									
								</div>	
								<div class="col-md-4">
									<ul class="checklist">								
										<li>Makeup/shaving mirror</li>
										<li>Shower/tub combination</li>
										<li>Satellite TV service</li>
										<li>Electronic/magnetic keys</li>	
									</ul>									
								</div>									
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- End of collapse 8 -->				
						
						
					</div>
					
					<!-- TAB 4 -->					
					<div id="maps" class="tab-pane fade">
						<div class="hpadding20">
							<div id="map-canvas"></div>
						</div>
					</div>
					
					<!-- TAB 5 -->					
					<div id="reviews" class="tab-pane fade ">
						<div class="hpadding20">
							<div class="col-md-4 offset-0">
								<span class="opensans dark size60 slim lh3 ">4.5/5</span><br/>
								<img src="<?=Url::to('@web/')?>images/user-rating-4.png" alt=""/>
							</div>
							<div class="col-md-8 offset-0">
								<div class="progress progress-striped">
								  <div class="progress-bar progress-bar-success wh75percent" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
									<span class="sr-only">4.5 out of 5</span>
								  </div>
								</div>		
								<div class="progress progress-striped">
								  <div class="progress-bar progress-bar-success wh100percent" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
									<span class="sr-only">100% of guests recommend</span>
								  </div>
								</div>
								<div class="clearfix"></div>
								Ratings based on 5 Verified Reviews
							</div>			
							<div class="clearfix"></div>
							<br/>
							<span class="opensans dark size16 bold">Average ratings</span>
						</div>
						
						<div class="line4"></div>
						
						<div class="hpadding20">
							<div class="col-md-4 offset-0">
								<div class="scircle left">4.4</div>
								<div class="sctext left margtop15">Cleanliness</div>
								<div class="clearfix"></div>
								<div class="scircle left">4.0</div>
								<div class="sctext left margtop15">Service & staff</div>
								<div class="clearfix"></div>								
							</div>
							<div class="col-md-4 offset-0">
								<div class="scircle left">3.8</div>
								<div class="sctext left margtop15">Room comfort</div>
								<div class="clearfix"></div>
								<div class="scircle left">4.4</div>
								<div class="sctext left margtop15">Sleep Quality</div>			
								<div class="clearfix"></div>										
							</div>
							<div class="col-md-4 offset-0">
								<div class="scircle left">4.2</div>
								<div class="sctext left margtop15">Location</div>
								<div class="clearfix"></div>
								<div class="scircle left">4.4</div>
								<div class="sctext left margtop15">Value for Price</div>		
								<div class="clearfix"></div>										
							</div>		
							<div class="clearfix"></div>
							
							<br/>
							<span class="opensans dark size16 bold">Reviews</span>
						</div>
						
						<div class="line2"></div>
						
						<div class="hpadding20">							
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="<?=Url::to('@web/')?>images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="<?=Url::to('@web/')?>images/check.png" alt=""/><br/>
										<span class="cyan">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>Excellent hotel, friendly staff would def go there again</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
							
						<div class="line2"></div>
						
						<div class="hpadding20">	
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="<?=Url::to('@web/')?>images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="<?=Url::to('@web/')?>images/check.png" alt=""/><br/>
										<span class="cyan">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>The view from our balcony in room # 409, was terrific. It was centrally located to everything on and around the port area. Wonderful service and everything was very clean. The breakfast was below average, although not bad. If back in Zante Town we would stay there again.</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
							
						<div class="line2"></div>
							
						<div class="hpadding20">	
							<div class="col-md-4 offset-0 center">
								<div class="padding20">
									<div class="bordertype5">
										<div class="circlewrap">
											<img src="<?=Url::to('@web/')?>images/user-avatar.jpg" class="circleimg" alt=""/>
											<span>4.5</span>
										</div>
										<span class="dark">by Sena</span><br/>
										from London, UK<br/>
										<img src="<?=Url::to('@web/')?>images/check.png" alt=""/><br/>
										<span class="cyan">Recommended<br/>for Everyone</span>
									</div>
									
								</div>
							</div>
							<div class="col-md-8 offset-0">
								<div class="padding20">
									<span class="opensans size16 dark">Great experience</span><br/>
									<span class="opensans size13 lgrey">Posted Jun 02, 2013</span><br/>
									<p>It is close to everything but if you go in the lower season the pool won't be ready even though the temperature was quiet high already.</p>	
									<ul class="circle-list">
										<li>4.5</li>
										<li>3.8</li>
										<li>4.2</li>
										<li>5.0</li>
										<li>4.6</li>
										<li>4.8</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>							
						</div>	
						
						<div class="line2"></div>
						<br/>
						<br/>
						<div class="hpadding20">
							<span class="opensans dark size16 bold">Reviews</span>
						</div>
						
						<div class="line2"></div>

						<div class="wh33percent left center">
							<ul class="jslidetext">
								<li>Cleanliness</li>
								<li>Room comfort</li>
								<li>Location</li>
								<li>Service & staff</li>
								<li>Sleep quality</li>
								<li>Value for Price</li>
							</ul>
							
							<ul class="jslidetext2">
								<li>Username</li>
								<li>Evaluation</li>
								<li>Title</li>
								<li>Comment</li>
							</ul>
						</div>
						<div class="wh66percent right offset-0">
							<script>
								//This is a fix for when the slider is used in a hidden div
								function testTriger(){
									setTimeout(function (){
										$(".cstyle01").resize();
									}, 500);	
								}
							</script>
							<div class="padding20 relative wh70percent">
								<div class="layout-slider wh100percent">
								<span class="cstyle01"><input id="Slider1" type="slider" name="price" value="0;4.2" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider(){
								  jQuery("#Slider1").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  testTriger();
								  }
								</script>
								
								
								
								<div class="layout-slider margtop10 wh100percent">
								<span class="cstyle01"><input id="Slider2" type="slider" name="price" value="0;5.0" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider2(){
								  jQuery("#Slider2").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  }
								</script>
								
								<div class="layout-slider margtop10 wh100percent">
								<span class="cstyle01"><input id="Slider3" type="slider" name="price" value="0;2.5" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider3(){
								  jQuery("#Slider3").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  }
								</script>

								<div class="layout-slider margtop10 wh100percent">
								<span class="cstyle01"><input id="Slider4" type="slider" name="price" value="0;3.8" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider4(){
								  jQuery("#Slider4").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  }
								</script>
								
								<div class="layout-slider margtop10 wh100percent">
								<span class="cstyle01"><input id="Slider5" type="slider" name="price" value="0;4.4" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider5(){
								  jQuery("#Slider5").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  }
								</script>
								
								<div class="layout-slider margtop10 wh100percent">
								<span class="cstyle01"><input id="Slider6" type="slider" name="price" value="0;4.0" /></span>
								</div>
								<script type="text/javascript" >
								function trigerJslider6(){
								  jQuery("#Slider6").slider({ from: 0, to: 5, step: 0.1, smooth: true, round: 1, dimension: "", skin: "round" });
								  }
								</script>
								
								<input type="text" class="form-control margtop10" placeholder="">
								<select class="form-control mySelectBoxClass margtop10">
								  <option selected>Wonderful!</option>
								  <option>Nice</option>
								  <option>Neutral</option>
								  <option>Don't recommend</option>
								</select>
								<input type="text" class="form-control margtop10" placeholder="">
								
								<textarea class="form-control margtop10" rows="3"></textarea>
								
								<div class="clearfix"></div>
								<button type="submit" class="btn-search4 margtop20">Submit</button>	

								<br/>
								<br/>
								<br/>
								<br/>
								
							</div>							
						</div>
						<div class="clearfix"></div>

					</div>		
					
					<!-- TAB 6 -->					
					<div id="thingstodo" class="tab-pane fade">
					
						<p class="hpadding20 opensans size16 dark bold">Attractions travelers recommend</p>
						
						<div class="line2"></div>
						
						<div class="padding20">
							<div class="col-md-4 offset-0">
								<a href="<?=Url::to('@web/')?>#"><img src="<?=Url::to('@web/')?>images/items2/item5.jpg" alt="" class="fwimg"/></a>
							</div>
							<div class="col-md-8 offset-0">
								<div class="col-md-8 mediafix1">
									<span class="opensans dark size16 margtop1 margtop-5">Porto Limnionas Beach</span><br/>
										<span class="lblue">“Just Great!!!”</span> 08/27/2013<br/>
										<p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 center bordertype4">
									<img src="<?=Url::to('@web/')?>images/user-rating-4.png" alt=""/><br/>
									<span class="opensans grey size14">31 reviews</span>
									<br/><br/><br/><br/>
									<button class="bookbtn mt1">More</button>	
								</div>										
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="line2"></div>		

						<div class="padding20">
							<div class="col-md-4 offset-0">
								<a href="<?=Url::to('@web/')?>#"><img src="<?=Url::to('@web/')?>images/items2/item6.jpg" alt="" class="fwimg"/></a>
							</div>
							<div class="col-md-8 offset-0">
								<div class="col-md-8 mediafix1">
									<span class="opensans dark size16 margtop1 margtop-5">Marathonissi (Turtle Island), Laganas</span><br/>									
										<span class="lblue">“Beautiful”</span> 08/27/2013<br/>
										<p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 center bordertype4">
									<img src="<?=Url::to('@web/')?>images/user-rating-5.png" alt=""/><br/>
									<span class="opensans grey size14">23 reviews</span>
									<br/><br/><br/><br/>
									<button class="bookbtn mt1">More</button>	
								</div>										
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="line2"></div>		

						<div class="padding20">
							<div class="col-md-4 offset-0">
								<a href="<?=Url::to('@web/')?>#"><img src="<?=Url::to('@web/')?>images/items2/item7.jpg" alt="" class="fwimg"/></a>
							</div>
							<div class="col-md-8 offset-0">
								<div class="col-md-8 mediafix1">
									<span class="opensans dark size16 margtop1 margtop-5">Navagio Beach (Shipwreck Beach)</span><br/>											
										<span class="lblue">“like being on a tropical island”</span> 08/27/2013<br/>
										<p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 center bordertype4">
									<img src="<?=Url::to('@web/')?>images/user-rating-3.png" alt=""/><br/>
									<span class="opensans grey size14">17 reviews</span>
									<br/><br/><br/><br/>
									<button class="bookbtn mt1">More</button>	
								</div>										
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="line2"></div>		

						<div class="padding20">
							<div class="col-md-4 offset-0">
								<a href="<?=Url::to('@web/')?>#"><img src="<?=Url::to('@web/')?>images/items2/item8.jpg" alt="" class="fwimg"/></a>
							</div>
							<div class="col-md-8 offset-0">
								<div class="col-md-8 mediafix1">
									<span class="opensans dark size16 margtop1 margtop-5">Blue Caves</span><br/>										
										<span class="lblue">“A must see”</span> 08/27/2013<br/>
										<p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 center bordertype4">
									<img src="<?=Url::to('@web/')?>images/user-rating-4.png" alt=""/><br/>
									<span class="opensans grey size14">10 reviews</span>
									<br/><br/><br/><br/>
									<button class="bookbtn mt1">More</button>	
								</div>										
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="line2"></div>								
					
					
					
					</div>						
				</div>
			</div>
			
			<div id="panels" class="col-md-4" >
				
				<!--div class="pagecontainer2 testimonialbox">
					<div class="cpadding0 mt-10">
						<span class="icon-quote"></span>
						<p class="opensans size16 grey2">It was very comfortable to stay and staff were pleasant and welcoming.<br/>
						<span class="lato 5bbfbf bold size13"><i>by Ellison from United Kingdom</i></span></p> 
					</div>
				</div-->
				
				<div class="pagecontainer2 mt20 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Yardım mı lazım?</h3>
						<p class="size14 grey">Ekibimiz 24/7 size yardım etmek için hizmetinizdedir. Her türlü rezervasyon işlemi ve sorularınız için bizi arayabilirsiniz.</p>
						<p class="opensans size30 green xslim">0 (216) 451 51 15</p>
					</div>
				</div><br/>
				
				<div class="pagecontainer2 mt20 alsolikebox">
					<div class="cpadding1">
						<span class="icon-location"></span>
						<h3 class="opensans">Bu villaları da beğenebilirsiniz</h3>
						<div class="clearfix"></div>
					</div>
					<div class="cpadding1 ">
						<a href="<?=Url::to('@web/villa/').$villa0["slug"]?>"><img src="<?=Url::to('@web/images/villa/t/').$villa0["pic"]?>" width="100px" class="left mr20" alt=""/></a>
						<a href="<?=Url::to('@web/villa/').$villa0["slug"]?>" class="dark"><b><?=$villa0["name"]?></b></a><br/>
						<span class="opensans green bold size14"><?=$villa0["price"]?></span> <span class="grey"><?=$villa0["curr"]?></span><br/>
						<img src="<?=Url::to('@web/')?>images/filter-rating-5.png" alt=""/>
					</div>
					<div class="line5"></div>
					<div class="cpadding1 ">
						<a href="<?=Url::to('@web/villa/').$villa1["slug"]?>"><img src="<?=Url::to('@web/images/villa/t/').$villa1["pic"]?>" width="100px" class="left mr20" alt=""/></a>
						<a href="<?=Url::to('@web/villa/').$villa1["slug"]?>" class="dark"><b><?=$villa1["name"]?></b></a><br/>
						<span class="opensans green bold size14"><?=$villa1["price"]?></span> <span class="grey"><?=$villa1["curr"]?></span><br/>
						<img src="<?=Url::to('@web/')?>images/filter-rating-5.png" alt=""/>
					</div>
					<div class="line5"></div>
					<div class="cpadding1 ">
						<a href="<?=Url::to('@web/villa/').$villa2["slug"]?>"><img src="<?=Url::to('@web/images/villa/t/').$villa2["pic"]?>" width="100px" class="left mr20" alt=""/></a>
						<a href="<?=Url::to('@web/villa/').$villa2["slug"]?>" class="dark"><b><?=$villa2["name"]?></b></a><br/>
						<span class="opensans green bold size14"><?=$villa2["price"]?></span> <span class="grey"><?=$villa2["curr"]?></span><br/>
						<img src="<?=Url::to('@web/')?>images/filter-rating-5.png" alt=""/>
					</div>
					<div class="line5"></div>
					
					<br/>
				
					
				</div>				
			
			</div>
		</div>
		
		
		
	</div>
	<!-- END OF CONTENT -->
	
	
	


	
	
	<!-- FOOTER -->
    <?php $this->beginContent('@app/views/layouts/footer2.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /FOOTER -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
	
	<!-- Javascript -->	
	<script src="<?=Url::to('@web/')?>assets/js/js-details.js"></script>
	
<script>

var myLat = 36.5110;
var myLng = -4.8825;

</script>
	<!-- Googlemap -->	
	<script src="<?=Url::to('@web/')?>assets/js/initialize-google-map.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/datepicker-tr.js"></script>	
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/jquery.customSelect.js'></script>
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>

    <!-- Nicescroll  -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?=Url::to('@web/')?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/moment.min.js'></script>	
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/daterangepicker.js'></script>	

    <!-- CarouFredSel -->
    <!--script src="<?=Url::to('@web/')?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.touchSwipe.min.js"></script-->
	
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

    <!-- Counter -->	
    <script src="<?=Url::to('@web/')?>assets/js/counter.js"></script>	
	
    <!-- Carousel-->	
    <script src="<?=Url::to('@web/')?>assets/js/initialize-carousel-detailspage.js"></script>	
    <script src="<?=Url::to('@web/')?>assets/js/owl.carousel.js"></script>		
    <script src="<?=Url::to('@web/')?>assets/js/owl.carousel2.thumbs.js"></script>		
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/photoswipe.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/photoswipe-ui-default.js"></script>
	
    <!-- Js Easing-->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>

	
    <!-- Bootstrap-->	
    <script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>


	
<script type="text/javascript">
var openPhotoSwipe = function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [

		<?php
		foreach ($data["pictures"] as $pic)
		{
            $root = \Yii::getAlias('@webroot') . '/images/villa/';
			$img = $root . $pic;
			$url = Url::to('@web/')."images/villa/$pic";
			if (file_exists($img))
				$size = getimagesize($img);
			else
				$size = [800,600];
			echo "{src: '$url', w:$size[0], h:$size[1]},";
		}
		?>
    ];
    
    // define options (if needed)
    var options = {
             // history & focus options are disabled on CodePen        
        history: false,
        focus: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0
        
    };
    
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};
</script>
  </body>
</html>
