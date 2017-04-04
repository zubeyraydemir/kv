<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

?>

	<!-- Top wrapper -->			  
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
				<a href="<?=Url::to('@web/')?>" class="navbar-brand logo" style="height:1%;padding:0"><img src="<?=Url::to('@web/')?>images/logo.png" alt="Kiralik Villam" class="logo"/></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right"> 
				  <li><a href="<?=Url::to('@web/list')?>"><?=\Yii::t('app', 'Villas');?></a></li>
					
					<li><a href="<?=Url::to('hizmetler')?>"><?=\Yii::t('app', 'Services');?></a></li>
					<li><a href="<?=Url::to('haberler')?>"><?=\Yii::t('app', 'News');?></a></li>
					<li><a href="<?=Url::to('hakkinda')?>"><?=\Yii::t('app', 'About Us');?></a></li>
					<li><a href="<?=Url::to('@web/').\Yii::t('app', 'contact')?>"><?=\Yii::t('app', 'Contact');?></a></li>

					<li style="text-align:center"><img width="110px" src="<?=Url::to('@web/')?>images/tursabbw.png" alt=""/><br>Belge Numarası: 8744</li>

					<li><a href="https://www.facebook.com/kiralikvillam" class="sociallogo"><img width="28px" src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a></li>
					<li><a href="https://twitter.com/kiralikvillam" class="sociallogo"><img  width="28px" src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a></li>
					<li><a href="https://instagram.com/kiralikvillam" class="sociallogo"><img width="28px" src="<?=Url::to('@web/')?>images/icon-instagram.png" alt=""/></a></li>
					

					
						
						
						
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>
	<!-- /Top wrapper -->	
