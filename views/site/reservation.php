<?php
use yii\helpers\Html; 
use yii\helpers\Url;

$this->title = \Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	
    <!-- Bootstrap -->
    <link href="<?=Url::to('@web/', true)?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?=Url::to('@web/', true)?>assets/css/custom.css" rel="stylesheet" media="screen">


	<link href="<?=Url::to('@web/', true)?>examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=Url::to('@web/', true)?>assets/js/html5shiv.js"></script>
      <script src="<?=Url::to('@web/', true)?>assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=Url::to('@web/', true)?>assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?=Url::to('@web/', true)?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
  </head>
  <body id="top" class="thebg" >
    
		
	<!-- Top wrapper -->	
    <?php $this->beginContent('@app/views/layouts/headermail.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /Top wrapper -->	


	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="<?=Url::to('@web/', true)?>#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#" class="active"><?=\Yii::t("app", "Your reservation")?></a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="<?=Url::to('@web/', true)?>"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
			
			<!-- CONTENT -->
			<div class="col-md-12 pagecontainer2 offset-0">
				<div class="col-md-12 mt20">
					<p>Sayın <?=$name?>,</p>
					<p><b><?=$villa_name?></b> için yaptığınız <b><?=date("d.m.Y",strtotime($start_date))?> - <?=date("d.m.Y",strtotime($end_date))?></b> tarihleri arasındaki rezervasyon talebiniz bize ulaşmıştır. Seçtiğiniz tarihler arasında villamız <?=mb_strtolower($available, 'UTF-8')?> durumdadır.</p>
					<br>
					<?php if ($total_price > 0) { ?>
					<p><b>Toplam fiyat:</b><?=$total_price?></p>
					<p><b>Ön ödeme miktarı:</b><?=$pre_payment?></p>
					<?php }?>
					<p><b>Misafir notu:</b><?=$note?></p>
					<br>
					<p>En kısa süre içerisinde size geri dönüş yapılacaktır. <br>Dilediğiniz vakitte müşteri destek hattımızı <span style="color:#5bbfbf">0 (216) 451 51 15</span> arayabilirsiniz.</p>
					<br><br>
					<a href="http://www.kiralikvillam.com"><img src="<?=Url::to('@web/',true)?>images/logo.png" alt="Kiralik Villam" width="100"/><br>Kiralik Villam</a>
					<br>0 (216) 451 51 15
					<br>info@kiralikvillam.com 
					
				</div>
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
			

			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
  </body>
</html>
