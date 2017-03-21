<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);

if (!isset($model))
{
        $model = new app\models\LoginForm();
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
	<!-- Bootstrap -->
	<link href="<?=Url::to('@web/')?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?=Url::to('@web/')?>assets/css/custom.css" rel="stylesheet" media="screen">

	<!-- Animo css-->
	<link href="<?=Url::to('@web/')?>plugins/animo/animate+animo.css" rel="stylesheet" media="screen">
	
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
	
	<!-- Load jQuery -->
	<script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>


	

  </head>
<body>
<?php $this->beginBody() ?>

	<!-- 100% Width & Height container  -->
	<div class="login-fullwidith">
		
		<!-- Login Wrap  -->
		<div class="login-wrap">
		
			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'layout' => 'horizontal',
				'fieldConfig' => [
					'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
					'labelOptions' => ['class' => 'col-lg-1 control-label'],
				],
			]); ?>
			<img src="<?=Url::to('@web/')?>images/logo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
				<div class="cpadding50">
 
					<input type="text" name="LoginForm[username]" class="form-control logpadding" placeholder="Username">
					<br/>
					<input type="text" name="LoginForm[password]" class="form-control logpadding" placeholder="Password">
				</div>
			</div>
			<div class="login-c2">
				<div class="logmargfix">
					<div class="chpadding50">
							<div class="alignbottom">
								<button class="btn-search4" name="login-button"  type="submit" onclick="errorMessage()">Submit</button>							
							</div>
							<div class="alignbottom2">
							  <div class="checkbox">
								<label>
								  <input type="checkbox" name="LoginForm[rememberMe]">Remember
								</label>
							  </div>
							</div>
					</div>
				</div>
			</div>
			<div class="login-c3">
				<div class="left"><a href="#" class="whitelink"><span></span>Website</a></div>
				<div class="right"><a href="#" class="whitelink">Lost password?</a></div>
			</div>	

			<?php ActiveForm::end(); ?>			
		</div>
		<!-- End of Login Wrap  -->
	
	</div>	
	<!-- End of Container  -->

	<!-- Javascript  -->
	<script src="<?=Url::to('@web/')?>assets/js/initialize-loginpage.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>
	<!-- Load Animo -->
	<script src="<?=Url::to('@web/')?>plugins/animo/animo.js"></script>
	<script>
	function errorMessage(){
		$('.login-wrap').animo( { animation: 'tada' } );
	}
	</script>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
