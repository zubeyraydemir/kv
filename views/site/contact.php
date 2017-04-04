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
				
						<form id="contactform">
					<div class="tab-content">
						<div id="sendmail">
						<div class="col-md-4">
							<span class="opensans size24 slim"><?=\Yii::t("app", "Contact")?></span>
							<input type="text" id="name" placeholder="<?=\Yii::t("app", "Name")?>" class="form-control logpadding margtop10">
							<input type="text" id="phone" placeholder="<?=\Yii::t("app", "Phone")?>" class="form-control logpadding margtop20">
							<input type="text" id="mail" placeholder="<?=\Yii::t("app", "Email")?>" class="form-control logpadding margtop20">
						</div>
						<div class="col-md-4">
							<textarea rows="9" id="comment" class="form-control margtop10"></textarea>
						</div>
						</div>
						<div class="col-md-4 opensans grey">
							<?=\Yii::t("app", "Address")?>:<br/>
							<span class="dark">
								Altayçeşme Mh. Çamlı Sk.<br> DAP Royal Center D Blok D.76<br> Maltepe - İstanbul 
							</span>
							<br/>
							<?=\Yii::t("app", "Phone")?><br/>
							<p class="opensans size30 cyan xslim">0 (216) 451 51 15</p>
							<?=\Yii::t("app", "Mobile")?><br/>
							<p class="opensans size30 cyan xslim">0 (549) 451 51 15</p>
							<?=\Yii::t("app", "Email")?><br/>
							<a href="<?=Url::to('@web/')?>mailto:info@kiralikvillam.com" class="green2">info@kiralikvillam.com</a>
						</div>
					</div>
					
					<div class="searchbg3">
						<button type="submit" class="btn-search right mr20"><?=\Yii::t("app", "Send Email")?></button>
					</div>
						</form>
						
				</div>
			</div>
		  </div>
		</div>
		

		
		<div class="lastminutecontact lcfix">
			<div class="container lmc">	
				<img src="<?=Url::to('@web/')?>images/rating-5.png" alt=""/><br/>
				Her türlü soru ve önerileriniz için bizi arayabilirsiniz.<br/>
			</div>
		</div>
		

		
		
	<!-- FOOTER -->
    <?php $this->beginContent('@app/views/layouts/footer.php'); ?>
	<?php $this->endContent(); ?>
	<!-- /FOOTER -->
	
	
	<script>
		var baseUrl = "<?=Url::to('@web/')?>";
		var _csrf = '<?=Yii::$app->request->getCsrfToken()?>';

		$("#contactform").submit(function() {

			$.ajax({
			url: baseUrl+ 'sendcontact',
			type: 'post',
			data: {
						_csrf : _csrf,
						name: $("#name").val(),
						phone: $("#phone").val(),
						mail: $("#mail").val(),
						comment: $("#comment").val(),
					},
			success: function (data) {
				$("#sendmail").html("<div class='col-md-8 size15'> Emailiniz gönderilmiştir. En kısa sürede size geridönüş yapacağız.");
				
			}
			});

			return false;
		});
	</script>

	
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
