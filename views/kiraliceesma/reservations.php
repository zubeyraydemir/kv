<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

?>
<div class="padding40">
    <!--script type="text/javascript">var estates = <?//=$estates?>;</script-->
	
	<div class="panel-group" id="estateslist">

	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" data-parent="#estateslist" href="#collapseNew">
				<h4 class="panel-title">
					Rezervasyon Talepleri
				</h4>
			</a>
		</div>
		<div id="collapseNew" class="panel-collapse collapse in">
			<div class="panel-body">
				
					<table class="table" style="width:100%">
						<thead>
							<tr>
								<th>Villa</th>
								<th>Başlangıç</th>
								<th>Bitiş</th>
								<th>Ad</th>
								<th>Telefon</th>
								<th>Mail</th>
								<th>Not</th>
								<th>Toplam Para</th>
								<th>Ön ödeme</th>
								<th>Tarih</th>
							<tr>
						</thead>
						<tbody>
							<?php
							foreach ($res as $r)
							{
								?>
								<tr>
									<td><?=$r["villa_name"]?></td>
									<td><?=$r["start_date"]?></td>
									<td><?=$r["end_date"]?></td>
									<td><?=$r["name"]?></td>
									<td><?=$r["phone"]?></td>
									<td><?=$r["mail"]?></td>
									<td><?=$r["note"]?></td>
									<td><?=$r["total_price"]?></td>
									<td><?=$r["pre_payment"]?></td>
									<td><?=$r["created"]?></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</div>
</div> 