<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

?>


	
	<!-- FOOTER -->
	<div class="footerbgblack">
		<div class="container">		
			
			<div class="col-md-3">
				<span class="ftitleblack"><?=\Yii::t("app", "Social media")?></span>
				<div class="scont">
					<a href="https://www.facebook.com/kiralikvillam" class="social1b"><img src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a>
					<a href="https://twitter.com/kiralikvillam" class="social2b"><img src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a> 
					<a href="https://instagram.com/kiralikvillam" class="social3b"><img src="<?=Url::to('@web/')?>images/icon-instagram.png" alt=""/></a>
					<br/><br/><br/><br/>
					<span class="grey2">&copy; <?=date("Y")?>     <br/>
					Tüm hakları saklıdır.</span>
					<br/><br/>
					
				</div>
			</div>
			<!-- End of column 1-->
			
			<div class="col-md-6">
		<div class="container center grey"> 
		<a href="<?=Url::to('@web/')?>"><?=\Yii::t("app", "Home")?></a> | 
		<a href="<?=Url::to('@web/villalar')?>"><?=\Yii::t("app", "Villas")?></a> | 
		<!--a href="<?=Url::to('@web/hizmetler')?>"><?=\Yii::t("app", "Services")?></a> | 
		<a href="<?=Url::to('@web/haberler')?>"><?=\Yii::t("app", "News")?></a> | -->
		<a href="<?=Url::to('@web/hakkinda')?>"><?=\Yii::t("app", "About Us")?></a> | 
		<a href="<?=Url::to('@web/iletisim')?>"><?=\Yii::t("app", "Contact")?></a>
		<a href="#top" class="gotop scroll"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
		</div>			
			</div>
			<!-- End of column 3-->		
			
			<div class="col-md-3 grey">
				
					<div style="text-align:center"><script type="text/javascript" src="//cdn.tursab.org.tr/agencyapproval/21dd0061f3878be6aca3c7d5c66dd04d024a9e0bf6f72bacac8c7b2b14d6aeb0.js?t=1&w=150&a=1"></script></div>
				<br/> 
				<span class="ftitleblack"><?=\Yii::t("app", "Customer support")?></span><br/>
				<span class="pnr">0 (216) 451 51 15</span><br/>
				<a href="<?=Url::to('@web/')?>mailto:info@kiralikvillam.com" class="green2">info@kiralikvillam.com</a>
			</div>			
			<!-- End of column 4-->			
		
			
		</div>	
	</div>
	
	<div class="footerbg3black">
	</div>
	