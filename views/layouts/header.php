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
					<li>
						<form action="<?=Url::to('@web/villalar')?>" class="">
							<div class="input-group" style="width:180px; margin-top:10px">
									<input type="search" name="vname" placeholder="<?=\Yii::t('app', 'Search by villa name');?>" class="form-control"  />
									<div class="input-group-btn">
											<button class="btn btn-info">
											<span class="glyphicon glyphicon-search"></span>
											</button>
									</div>
							</div>
						</form> 
					</li>
				  <li><a href="<?=Url::to('@web/list')?>"><?=\Yii::t('app', 'Villas');?></a></li>
				  <!--li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?=\Yii::t('app', 'Services');?><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu">
					  <li><a href="<?=Url::to('@web/')?>#"><?=\Yii::t('app', 'TURSAB');?></a></li>
					  <li><a href="<?=Url::to('@web/')?>#"><?=\Yii::t('app', 'Tourism Butterfly');?></a></li>
					  <li><a href="<?=Url::to('@web/')?>#"><?=\Yii::t('app', 'Villa Owners');?></a></li>
					</ul>
				  </li-->		
					
					<!--li><a href="<?=Url::to('hizmetler')?>"><?=\Yii::t('app', 'Services');?></a></li>
					<li><a href="<?=Url::to('haberler')?>"><?=\Yii::t('app', 'News');?></a></li-->
					<li><a href="<?=Url::to('hakkinda')?>"><?=\Yii::t('app', 'About Us');?></a></li>
					<li><a href="<?=Url::to('@web/').\Yii::t('app', 'contact')?>"><?=\Yii::t('app', 'Contact');?></a></li>

					<li style="text-align:center"><script type="text/javascript" src="//cdn.tursab.org.tr/agencyapproval/21dd0061f3878be6aca3c7d5c66dd04d024a9e0bf6f72bacac8c7b2b14d6aeb0.js?t=1&w=110"></script></li>

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
