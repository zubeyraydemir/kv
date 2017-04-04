<?php
use yii\helpers\Html; 
use yii\helpers\Url;

$this->title = \Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
	<p>Sayın <?=$name?>,</p>
	<p><b><?=$villa_name?></b> için yaptığınız <b><?=date("d.m.Y",strtotime($start_date))?> - <?=date("d.m.Y",strtotime($end_date))?></b> tarihleri arasındaki rezervasyon talebiniz bize ulaşmıştır.</p>
	<br>
	<p>Tatil planınız için en kısa süre içerisinde size geri dönüş yapılacaktır. </p>
	<br>
	<?php if ($total_price > 0) { ?>
	<p><b>Toplam fiyat:</b> <?=$total_price?></p>
	<p><b>Ön ödeme miktarı:</b> <?=$pre_payment?></p>
	<?php }?>
	<p><b>Misafir notu:</b> <br><?=$note?></p>
	<br>
	<p>Dilediğiniz vakitte müşteri destek hattımızı <span style="color:#5bbfbf">0 (216) 451 51 15</span> arayabilirsiniz.</p>
	<br><br>
	<a href="http://www.kiralikvillam.com"><img src="<?=Url::to('@web/',true)?>images/logo.png" alt="Kiralik Villam" width="100"/><br>Kiralik Villam</a>
	<br>0 (216) 451 51 15
	<br>info@kiralikvillam.com 
	
</div>