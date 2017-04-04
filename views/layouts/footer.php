<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

?>

		<div class="footerbg">
			<div class="container">		
				<footer>
					<div class="footer">
						<a href="https://www.facebook.com/kiralikvillam" class="social1"><img src="<?=Url::to('@web/')?>images/icon-facebook.png" alt=""/></a>
						<a href="https://twitter.com/kiralikvillam" class="social2"><img src="<?=Url::to('@web/')?>images/icon-twitter.png" alt=""/></a>
						<a href="https://instagram.com/kiralikvillam" class="social4"><img src="<?=Url::to('@web/')?>images/icon-instagram.png" alt=""/></a>
						<br/><br/>
						Copyright &copy; 2017 Tüm hakları saklıdır.
						<br/><br/>
						<a href="<?=Url::to('@web/')?>#top" id="gotop2" class="gotop"><img src="<?=Url::to('@web/')?>images/spacer.png" alt=""/></a>
					</div>
				</footer>
			</div>	
		</div>
		
		<script>
			
	jQuery(window).scroll(function(){    
		//Social
		var l  = jQuery(".footerbg").offset().top - jQuery(window).scrollTop() - jQuery( window ).height();
		if(l <= -50){
			jQuery('.social1').stop().animate({top:'0px'}, 100);
			
			setTimeout(function (){
				jQuery('.social2').stop().animate({top:'0px'}, 100);
			}, 100);
			
			setTimeout(function (){
				jQuery('.social3').stop().animate({top:'0px'}, 100);
			}, 200);
			
			setTimeout(function (){
				jQuery('.social4').stop().animate({top:'0px'}, 100);
			}, 300);
			
			setTimeout(function (){
				jQuery('.gotop').stop().animate({top:'0px'}, 200);
			}, 400);				
			
		}       
		else {
			setTimeout(function (){
				jQuery('.gotop').stop().animate({top:'100px'}, 200);
			}, 400);	
			setTimeout(function (){
				jQuery('.social4').stop().animate({top:'-120px'}, 100);				
			}, 300);
			setTimeout(function (){
				jQuery('.social3').stop().animate({top:'-120px'}, 100);		
			}, 200);	
			setTimeout(function (){
			jQuery('.social2').stop().animate({top:'-120px'}, 100);		
			}, 100);	

			jQuery('.social1').stop().animate({top:'-120px'}, 100);			

		}
	});
	jQuery(window).trigger("scroll");
			</script>