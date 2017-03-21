<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = \Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
/*
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
*/
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


	<div id="dajy" class="mtslide sliderbg fixed cstyle11">	
			<div id="map-canvas2"></div>
	</div>
		



	<!-- WRAP -->
	<div class="wrap cstyle03">
		
		<div class="container mt-200 z-index100">		
		  <div class="row">
			<div class="col-md-12">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<div class="tab-content">

						<div class="col-md-4">
						<form action="#">
							<span class="opensans size24 slim">Contact</span>
							<input type="text" placeholder="Name" class="form-control logpadding margtop10">
							<input type="text" placeholder="Phone" class="form-control logpadding margtop20">
							<input type="text" placeholder="E-mail" class="form-control logpadding margtop20">
						</div>
						<div class="col-md-4">
							<textarea rows="9" class="form-control margtop10"></textarea>
						</div>
						<div class="col-md-4 opensans grey">
							Address:<br/>
							<span class="dark">
								Stephen J. Jessen<br/>
								2 Queen Anne Street<br/>
								London, W1G 9LQ<br/>
							</span>
							<br/>
							Phone<br/>
							<p class="opensans size30 cyan xslim">1-866-599-6674</p>
							Email<br/>
							<a href="<?=Url::to('@web/')?>mailto:office@company.com" class="green2">office@company.com</a>
						</div>
					</div>
					
					<div class="searchbg3">
						<button type="submit" class="btn-search right mr20">Send Email</button>
						</form>
					</div>
						
				</div>
			</div>
		  </div>
		</div>
		

		
		<div class="lastminutecontact lcfix">
			<div class="container lmc">	
				<img src="<?=Url::to('@web/')?>images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="details.html" >
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>
		

		
		
		<!-- FOOTER -->
		
		<div class="footerbg sfix3">
			<div class="container">		
				<footer>
					<div class="footer">
						<a href="<?=Url::to('@web/')?>#" class="social1"><img src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a>
						<a href="<?=Url::to('@web/')?>#" class="social2"><img src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a>
						<a href="<?=Url::to('@web/')?>#" class="social3"><img src="<?=Url::to('@web/')?>images/icon-gplus.png" alt=""/></a>
						<a href="<?=Url::to('@web/')?>#" class="social4"><img src="<?=Url::to('@web/')?>images/icon-youtube.png" alt=""/></a>
						<br/><br/>
						Copyright &copy; 2013 <a href="<?=Url::to('@web/')?>#">Travel Agency</a> All rights reserved. <a href="<?=Url::to('@web/')?>http://titanicthemes.com">TitanicThemes.com</a>
						<br/><br/>
						<a href="<?=Url::to('@web/')?>#top" id="gotop2" class="gotop"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
					</div>
				</footer>
			</div>	
		</div>
		
		

		
		
	</div>
	<!-- END OF WRAP -->
	
	
	

	
    <!-- This page JS -->
	<script src="<?=Url::to('@web/')?>assets/js/js-index.js"></script>	
	
	<!-- Googlemap -->	
	<script src="<?=Url::to('@web/')?>assets/js/initialize-google-map-contact.js"></script>
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="<?=Url::to('@web/')?>assets/js/jquery.easing.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="<?=Url::to('@web/')?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='<?=Url::to('@web/')?>assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=Url::to('@web/')?>dist/js/bootstrap.min.js"></script>
  </body>
</html>
