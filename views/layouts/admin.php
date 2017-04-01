<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
$this->title = "Yönetim Paneli"
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <!-- Bootstrap -->
	<?php $this->registerCssFile('@web/dist/css/bootstrap.css', ["media"=>"screen"]);?>
	<?php $this->registerCssFile('@web/assets/css/custom.css', ["media"=>"screen"]);?>
	<?php $this->registerCssFile('@web/assets/css/dashboard.css', ["media"=>"screen"]);?>
 
    <!-- Carousel -->
	<?php $this->registerCssFile('@web/examples/carousel/carousel.css');?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=Url::to('@web/')?>assets/js/html5shiv.js"></script>
      <script src="<?=Url::to('@web/')?>assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts 
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	-->	
	<!-- Font-Awesome -->
	<?php $this->registerCssFile('@web/assets/css/font-awesome.css', ["media"=>"screen"]);?> 
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?=Url::to('@web/')?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
	<!-- PIECHART -->
	<?php $this->registerCssFile('@web/assets/css/jquery.easy-pie-chart.css');?> 
	
    <!-- Picker UI-->	
	<?php $this->registerCssFile('@web/assets/css/jquery-ui.css');?>  	

	<?php $this->registerCssFile('@web/assets/css/bootstrap-year-calendar2.css');?>
	<?php $this->registerCssFile('@web/assets/css/bootstrap-datepicker3.css');?>
	<?php $this->registerCssFile('@web/assets/css/fileinput.css');?>
	
    <!-- jQuery -->	
    <script src="<?=Url::to('@web/')?>assets/js/jquery.v2.0.3.js"></script>

	<script src="<?=Url::to('@web/')?>assets/js/bootstrap-year-calendar2.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/bootstrap-datepicker.tr.min.js"></script>
	


	
	
  </head>
  <body id="top">
<?php $this->beginBody() ?>
    
	
	
	<!-- CONTENT -->
	<div class="container2">

		
		<div class="container2 offset-0">
			
			
			<!-- CONTENT -->
			<div class="col-md-12  offset-0">
				

				
				<!-- LEFT MENU -->
				<div class="dashboard-left offset-0 textcenter">
					
					<br/><br/>
					<a href="index.html"><img src="<?=Url::to('@web/')?>images/dash/logo.png" alt=""/></a><br/>
					<span class="size12 grey lh5">Welcome to the Admin Panel</span><br/>
					<a href="#"><img src="<?=Url::to('@web/images/dash/avatar.jpg')?>" class="dash-avatar" alt=""/></a><br/>
					<span class="size12 dark">Administrator</span><br/>
					
                <?php
				if (Yii::$app->user->isGuest)
					echo "<a href='".Url::to(Yii::$app->user->loginUrl)."'>Login</a>";
				else
				{
					echo '<a href="#"><img src="'.Url::to("@web/images/dash/logout.png").'" alt=""/>'.Html::beginForm(['/site/logout'], 'post') . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']).Html::endForm()."</a>";
				}
				?>
					<br/>
					<br/><br/>
					
					<!-- Nav tabs -->
					<ul class="nav dashboard-tabs">
						<!--li class="dropdown">
						  <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">
						  <div class="dash-ct">
							  <span class="dashboard-icon left"></span>	
							  <span class="dtxt">Dashboard
							  <b class="lightcaret "></b></span>
						  </div>
						  </a>
						  <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu2 lftwidth">
							<li><a data-toggle="tab"  href="#profile">Home</a></li>
							<li><a data-toggle="tab"  href="#dropdown2">Updates <span class="badge indent0">10</span></a></li>
						  </ul></li-->					
						<li class="active">
						  <a href="<?=Url::to('@web/kiraliceesma')?>" data-toggle="" >
						  <div class="dash-ct">
							  <span class="posts-icon left"></span>	
							  <span class="dtxt">Villalar</span>
						  </div>
						  </a></li>

						<li class="margbottom20">
						  <a href="<?=Url::to('@web/kiraliceesma/hakkinda')?>" data-toggle="" >
						  <div class="dash-ct">
							  <span class="comments-icon left"></span>	
							  <span class="dtxt">Hakkımızda</span>
						  </div>
						  </a></li>
						<!--li>
						  <a href="#media" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="media-icon left"></span>	
							  <span class="dtxt">Media</span>
						  </div>
						  </a></li>
						<li>
						  <a href="#pages" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="pages-icon left"></span>	
							  <span class="dtxt">Pages</span>
						  </div>
						  </a></li>
						<li class="margbottom20">
						  <a href="#comments" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="comments-icon left"></span>	
							  <span class="dtxt">Comments</span>
						  </div>
						  </a></li>
						<li>
						  <a href="#forums" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="forums-icon left"></span>	
							  <span class="dtxt">Forums</span>
						  </div>
						  </a></li>					
						<li>
						  <a href="#topics" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="topics-icon left"></span>	
							  <span class="dtxt">Topics</span>
						  </div>
						  </a></li>
						<li class="margbottom20">
						  <a href="#replies" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="replies-icon left"></span>	
							  <span class="dtxt">Replies</span>
						  </div>
						  </a></li>
						<li>
						  <a href="#appearance" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="appearance-icon left"></span>	
							  <span class="dtxt">Appearance</span>
						  </div>
						  </a></li>			
						<li>
						  <a href="#plugins" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="wishlist-icon left"></span>
							  <span class="dtxt">Plugins <span class="badge indent0">3</span></span>
						  </div>
						  </a></li>		
						<li>
						  <a href="#users" data-toggle="tab">
						  <div class="dash-ct">
							  <span class="profile-icon left"></span>									  
							  <span class="dtxt">Users</span>
						  </div>
						  </a></li>		
						<li>
						  <a href="#tools" data-toggle="tab">
						  <div class="dash-ct">
	  						  <span class="tools-icon left"></span>	
							  <span class="dtxt">Tools</span>
						  </div>
						  </a></li>	
						<li>
						  <a href="#settings" data-toggle="tab">
						  <div class="dash-ct">
							 <span class="settings-icon left"></span>									  
							  <span class="dtxt">Settings</span>
						  </div>
						  </a></li-->		
					</ul>
					<br/>
					<span class="dtxt">
						<span class="size12 grey">
							Copyright &copy; 2013.<br/>
							TitanicThemes.com
							</span>
						<br/>
						<br/>
						<br/>
					</span>
					<div class="clearfix"></div>
				</div>
				<!-- LEFT MENU -->
					
				<!-- RIGHT CPNTENT -->
				<div class="dashboard-right  offset-0">
					<!-- Tab panes from left menu -->
					<div class="tab-content5">
					
					  <!-- TAB 2 -->					  
					  <div class="tab-pane active" id="estates">
							<?=$content?>
					  </div>
					  <!-- END OF TAB 2 -->	
					  
					  <!-- TAB 3 -->					  
					  <div class="tab-pane" id="media">
						<div class="padding40">
						Media - comingsoon
						</div>
					  </div>
					  <!-- END OF TAB 3 -->	
					  
					</div>
					<!-- End of Tab panes from left menu -->	
					
				</div>
				<!-- END OF RIGHT CPNTENT -->
			
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
			

			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

	
	<div class="masternotice none">
	 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	 Message from TitanicThemes
	</div>
	


	
    <!-- This page JS -->
	<script type="text/javascript">
		var baseUrl = "<?=Url::to('@web/')?>";
		var _csrf = '<?=Yii::$app->request->getCsrfToken()?>';
	</script>
	<script type="text/javascript" src="<?=Url::to('@web/')?>assets/js/jquery.easy-pie-chart.js"></script>
	<script src="<?=Url::to('@web/')?>assets/js/js-admin.js"></script>	
	
	<script src="<?=Url::to('@web/')?>assets/js/js-dashboard.js"></script>	
    <script src="<?=Url::to('@web/')?>assets/js/notify.min.js"></script>
    <script src="<?=Url::to('@web/')?>assets/js/fileinput.min.js"></script>
    <script src="<?=Url::to('@web/')?>assets/js/sortable.min.js"></script>
    <script src="<?=Url::to('@web/')?>plugins/tinymce/tinymce.min.js"></script>

	
		
	<!-- Sparkline -->	
	<script src="<?=Url::to('@web/')?>assets/js/jquery.sparkline.js"></script>
	
    <!-- Custom functions -->
    <script src="<?=Url::to('@web/')?>assets/js/functions.js"></script>
	
    <!-- Counter -->	
    <script src="<?=Url::to('@web/')?>assets/js/counter.js"></script>		
	
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
<?php $this->endBody() ?>
  </body>
</html>

<?php $this->endPage() ?>
