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
					<li><a href="#" class="active"><?=\Yii::t("app", "About us")?></a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="<?=Url::to('@web/')?>"></a>
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
					
				<?=$about?>
				</div>
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
			

			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	
 
	
	
	<!-- FOOTER -->
    <?php $this->beginContent('@app/views/layouts/footer.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /FOOTER -->
	
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
