<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$data = false; 
if (isset($villa["data"]))
{
	$data = json_decode($villa["data"], true);
} 
?>
<div class="padding40">
    <!--script type="text/javascript">var estates = <?//=$estates?>;</script-->
	
	<div class="panel-group" id="estateslist">

	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" data-parent="#estateslist" href="#collapseNew">
				<h4 class="panel-title">
					<?=($data?$data["name"]:"Yeni Villa Ekle")?>
				</h4>
			</a>
		</div>
		<div id="collapseNew" class="panel-collapse collapse in">
			<div class="panel-body">
				<form id="formVilla" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?=Url::to('@web/kiraliceesma/savevilla')?>">
					<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
					<input type="hidden" name="villa_id" value="<?=($data? $villa["id"] :"")?>" />
					<input type="hidden" name="reservations" value="<?=($res? json_encode($res) :"")?>" />
					<input type="hidden" name="pictures" value="<?=($data? json_encode($data["pictures"]) :"")?>" />
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">İsim:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Villa adı" value="<?=($data?$data["name"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="region">Bölge:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control"  id="region" name="region"  placeholder="Bölge" value="<?=($data?$data["region"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="currency">Para birimi:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control"  id="currency" name="currency"  placeholder="eur,try,usd,gbp" value="<?=(isset($data["currency"])?$data["currency"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">Adres:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="address" name="address" placeholder="Adres" value="<?=($data?$data["address"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="owner">Villa sahibi:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="owner" name="owner" placeholder="Villa sahibi" value="<?=($data?$data["owner"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="owner_phone">Telefonu:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="Telefon" value="<?=($data?$data["owner_phone"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="owner_mail">Maili:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="owner_mail" name="owner_mail" placeholder="Mail" value="<?=($data?$data["owner_mail"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="floor_count">Kat sayısı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="floor_count" name="floor_count" value="<?=($data?$data["floor_count"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="max_people_count">Max kişi sayısı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="max_people_count" name="max_people_count" value="<?=($data?$data["max_people_count"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="additional_people_count">İlave kişi sayısı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="additional_people_count" name="additional_people_count" value="<?=($data?$data["additional_people_count"]:"")?>">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="additional_people_price">İlave kişi fiyatı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="additional_people_price" name="additional_people_price" value="<?=($data?$data["additional_people_price"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="additional_baby_bed_count">İlave bebek yatağı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="additional_baby_bed_count" name="additional_baby_bed_count" value="<?=($data?$data["additional_baby_bed_count"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="additional_baby_bed_price">İlave bebek fiyatı:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="additional_baby_bed_price" name="additional_baby_bed_price" value="<?=($data?$data["additional_baby_bed_price"]:"")?>">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="deposit">Depozito</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="deposit" name="deposit" value="<?=($data?$data["deposit"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="cleaning_price">Temizlik ücreti</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="cleaning_price" name="cleaning_price" value="<?=($data?$data["cleaning_price"]:"")?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Özellikler</label>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="private_villa" <?=(isset($data["private_villa"])?"checked":"")?>>Müstakil villa</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="inside_site" <?=(isset($data["inside_site"])?"checked":"")?>>Site içerisinde</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="natural_secured" <?=(isset($data["natural_secured"])?"checked":"")?>>Doğal korunaklı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="curtain_secured" <?=(isset($data["curtain_secured"])?"checked":"")?>>Perdeli korunaklı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="sea_view" <?=(isset($data["sea_view"])?"checked":"")?>>Deniz manzarası</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="nature_view" <?=(isset($data["nature_view"])?"checked":"")?>>Doğa manzarası</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="pet_allowed" <?=(isset($data["pet_allowed"])?"checked":"")?>>Evcil hayvan</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="private_pool" <?=(isset($data["private_pool"])?"checked":"")?>>Müstakil havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="shared_pool" <?=(isset($data["shared_pool"])?"checked":"")?>>Ortak havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="heated_pool" <?=(isset($data["heated_pool"])?"checked":"")?>>Isıtmalı havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="closed_pool" <?=(isset($data["closed_pool"])?"checked":"")?>>Kapalı havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="private_parking" <?=(isset($data["private_parking"])?"checked":"")?>>Özel otopark</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="shared_parking" <?=(isset($data["shared_parking"])?"checked":"")?>>Ortak otopark</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="description">Açıklama:</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="description" name="description"><?=($data?$data["description"]:"")?></textarea>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="control-label col-sm-2">Evin iç donanımları</label>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="dish_washer" <?=(isset($data["dish_washer"])?"checked":"")?>>Bulaşık makinesi</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="fridge" <?=(isset($data["fridge"])?"checked":"")?>>Buzdolabı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="heater" <?=(isset($data["heater"])?"checked":"")?>>Fırın</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="kitchen_tools" <?=(isset($data["kitchen_tools"])?"checked":"")?>>Mutfak malzemeleri</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="toast_maker" <?=(isset($data["toast_maker"])?"checked":"")?>>Tost makinesi</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="iron" <?=(isset($data["iron"])?"checked":"")?>>Ütü</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="pet_allowed" <?=(isset($data["pet_allowed"])?"checked":"")?>>Evcil hayvan</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="hair_dryer" <?=(isset($data["hair_dryer"])?"checked":"")?>>Saç kurutma makinası</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="fireplace" <?=(isset($data["fireplace"])?"checked":"")?>>Şömine</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="seating_group" <?=(isset($data["seating_group"])?"checked":"")?>>Koltuk takımı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="television" <?=(isset($data["television"])?"checked":"")?>>Televizyon</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="jacuzzi" <?=(isset($data["jacuzzi"])?"checked":"")?>>Jakuzi</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="washer" <?=(isset($data["washer"])?"checked":"")?>>Çamaşır mak.</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="oven" <?=(isset($data["oven"])?"checked":"")?>>Ocak</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="microwave" <?=(isset($data["microwave"])?"checked":"")?>>Mikrodalga</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="kettle" <?=(isset($data["kettle"])?"checked":"")?>>Su ısıtıcı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="toaster" <?=(isset($data["toaster"])?"checked":"")?>>Ekmek kızartıcı</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="ironing_table" <?=(isset($data["ironing_table"])?"checked":"")?>>Ütü masası</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="safety_box" <?=(isset($data["safety_box"])?"checked":"")?>>Güvenlik kasası</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="air_conditioner" <?=(isset($data["air_conditioner"])?"checked":"")?>>Klima</label>
							</div>
							<div class="checkbox">
							<label>Yemek masası <input type="number"  name="food_table"  value="<?=($data?$data["food_table"]:"")?>"> kişilik</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="dvd_player" <?=(isset($data["dvd_player"])?"checked":"")?>>Dvd player</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="bathtub" <?=(isset($data["bathtub"])?"checked":"")?>>Küvet</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2">Evin dış donanımları</label>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="pool" <?=(isset($data["pool"])?"checked":"")?>>Havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="child_pool" <?=(isset($data["child_pool"])?"checked":"")?>>Çocuk havuz</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="sunbed" <?=(isset($data["sunbed"])?"checked":"")?>>Şezlong</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="camelia" <?=(isset($data["camelia"])?"checked":"")?>>Kamelya</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="barbeque" <?=(isset($data["barbeque"])?"checked":"")?>>Barbekü/Mangal</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="umbrella" <?=(isset($data["umbrella"])?"checked":"")?>>Şemsiye</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2">Fiyata dahil hizmetler</label>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="water" <?=(isset($data["water"])?"checked":"")?>>Su</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="electricity" <?=(isset($data["electricity"])?"checked":"")?>>Elektrik</label>
							</div>
							<div class="checkbox">
							<label><input type="checkbox" name="wireless" <?=(isset($data["wireless"])?"checked":"")?>>Wireless</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="checkbox">
							<label><input type="checkbox" name="gas" <?=(isset($data["gas"])?"checked":"")?>>Doğalgaz</label>
							</div>
							<div class="checkbox">
							<label>Limitli Elektrik <input type="number"  name="limited_electricity" value="<?=($data?$data["limited_electricity"]:"")?>"></label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Resimler</label>
						<div class="col-sm-10">
							<label class="control-label">Resimleri Seç</label>
							<input id="files" name="files[]" type="file" multiple data-show-upload="false" data-show-caption="true">
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2">Rezervasyon</label>
						<div class="col-sm-10">
							<div id="calendar" class="calendar"></div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2">Fiyat</label>
						<div class="col-sm-10">
							<div id="calendar2" class="calendar"></div>
						</div>
					</div>

					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Kaydet</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php 
	/*foreach ($estates as $estate)
	{?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#estateslist" href="#collapse<?=$estate->id?>"><?=$estate->name?></a>
			</h4>
		</div>
		<div id="collapse<?=$estate->id?>" class="panel-collapse collapse in">
			<div class="panel-body">
			
			</div>
		</div>
	</div>
	<?php }*/
	?>
</div>
</div>


<!-- Modal -->
<div id="event-modal" class="modal fade" role="dialog">

<div class="modal-dialog">

<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">
				Rezervasyon
			</h4>
		</div>
		<div class="modal-body">
			<input type="hidden" name="event-index" value="">
			<form  class="form-horizontal">
				<div class="form-group">
					<label for="min-date" class="col-sm-4 control-label">Rezervasyon sahibi</label>
					<div class="col-sm-7">
						<input name="event-name" type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="min-date" class="col-sm-4 control-label">Açıklama</label>
					<div class="col-sm-7">
						<input name="event-desc" type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="min-date" class="col-sm-4 control-label">Dates</label>
					<div class="col-sm-7">
							<div class="input-group input-daterange" data-provide="datepicker">
								<input name="event-start-date" type="text" class="form-control" value="2012-04-05">
								<span class="input-group-addon">to</span>
								<input name="event-end-date" type="text" class="form-control" value="2012-04-19">
							</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-primary" id="save-event">
				Kaydet
			</button>
		</div>
	</div>

</div>
</div>
<!-- Modal -->



<!-- Modal -->
<div id="event-fiyat" class="modal fade" role="dialog">

<div class="modal-dialog">

<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title">
				Fiyat
			</h4>
		</div>
		<div class="modal-body">
			<input type="hidden" name="event-index" value="">
			<form class="form-horizontal">
				<div class="form-group">
					<label for="min-date" class="col-sm-4 control-label">Fiyat</label>
					<div class="col-sm-7">
						<input name="event-para" type="number" step="0.01" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="min-date" class="col-sm-4 control-label">Dates</label>
					<div class="col-sm-7">
							<div class="input-group input-daterange" data-provide="datepicker">
								<input name="event-start-date2" type="text" class="form-control" value="2012-04-05">
								<span class="input-group-addon">to</span>
								<input name="event-end-date2" type="text" class="form-control" value="2012-04-19">
							</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-primary" id="save-event2">
				Kaydet
			</button>
		</div>
	</div>

</div>
</div>
<!-- Modal -->

<script type="text/javascript">
jQuery(document).ready(function(){
	
    var availableTags = [<?php
	foreach ($regions as $v)
	{
		//var_dump($v);
		echo '"'.$v["name"].'",';
	}
	?>];
	 $('#region').autocomplete({minLength: 0,source: availableTags,minChars: 0})
    .focus(function () {
        $(this).autocomplete('search', $(this).val())
    });
/*
    $("#region").autocomplete({
      source: availableTags,
		minChars: 0
    });
	$("#region").bind('focus', function(){ $(this).autocomplete("search"); } );*/
});
</script>


<script>
	function editEvent(event) {
    $('#event-modal input[name="event-index"]').val(event ? event.id : '');
    $('#event-modal input[name="event-name"]').val(event ? event.name : '');
    $('#event-modal input[name="event-desc"]').val(event ? event.location : '');
    $('#event-modal input[name="event-start-date"]').datepicker('setDate', event ? event.startDate : '');
    $('#event-modal input[name="event-end-date"]').datepicker('setDate', event ? event.endDate : '');
    $('#event-modal').modal();
}

	function editEvent2(event) {
    $('#event-fiyat input[name="event-index"]').val(event ? event.id : '');
    $('#event-fiyat input[name="event-para"]').val(event ? event.price : '');
    $('#event-fiyat input[name="event-start-date2"]').datepicker('setDate', event ? event.startDate : '');
    $('#event-fiyat input[name="event-end-date2"]').datepicker('setDate', event ? event.endDate : '');
    $('#event-fiyat').modal();
}

function deleteEvent(event) {
    var dataSource = $('#calendar').data('calendar').getDataSource();

    for(var i in dataSource) {
        if(dataSource[i].id == event.id) {
            dataSource.splice(i, 1);
            break;
        }
    }
    
    $('#calendar').data('calendar').setDataSource(dataSource);
}

function deleteEvent2(event) {
    var dataSource = $('#calendar2').data('calendar').getDataSource();

    for(var i in dataSource) {
        if(dataSource[i].id == event.id) {
            dataSource.splice(i, 1);
            break;
        }
    }
    
    $('#calendar2').data('calendar').setDataSource(dataSource);
}

function saveEvent() {
    var event = {
        id: $('#event-modal input[name="event-index"]').val(),
        name: $('#event-modal input[name="event-name"]').val(),
        location: $('#event-modal input[name="event-desc"]').val(),
        startDate: $('#event-modal input[name="event-start-date"]').datepicker('getDate'),
        endDate: $('#event-modal input[name="event-end-date"]').datepicker('getDate')
    }
    
    var dataSource = $('#calendar').data('calendar').getDataSource();

    if(event.id) {
        for(var i in dataSource) {
            if(dataSource[i].id == event.id) {
                dataSource[i].name = event.name;
                dataSource[i].location = event.location;
                dataSource[i].startDate = event.startDate;
                dataSource[i].endDate = event.endDate;
				
				$.ajax({
				url: baseUrl+ '/kiraliceesma/reserve',
				type: 'post',
				data: { _csrf : _csrf, id: event.id, name: event.name, description: event.location, start_date: event.startDate.sql(), end_date: event.endDate.sql(), villa_id: $("input[name=villa_id]").val() },
				async: false,
				success: function (data) {
					$.notify( "Rezervasyon güncellendi: " + event.name, { position:"top-center",  className: 'success', })
				}
			});
		
            }
        }
    }
    else
    {
		var eid = 0;
		$.ajax({
		url: baseUrl+ '/kiraliceesma/reserve',
		type: 'post',
		data: {  _csrf : _csrf, name: event.name, description: event.location, start_date: event.startDate.sql(), end_date: event.endDate.sql(), villa_id: $("input[name=villa_id]").val() },
		async: false,
		success: function (data) {
			eid = data;
			$.notify( "Rezervasyon eklendi: "+event.name, { position:"top-center",  className: 'success', })
		}
		});
		
        var newId = 0;
        for(var i in dataSource) {
            if(dataSource[i].id > newId) {
                newId = dataSource[i].id;
            }
        }
        
        newId++;
        event.id = eid;
    
        dataSource.push(event);
    }
    
    $('#calendar').data('calendar').setDataSource(dataSource);
    $('#event-modal').modal('hide');
}


function saveEvent2() {
    var event = {
        id: $('#event-fiyat input[name="event-index"]').val(),
        price: $('#event-fiyat input[name="event-para"]').val(),
        startDate: $('#event-fiyat input[name="event-start-date2"]').datepicker('getDate'),
        endDate: $('#event-fiyat input[name="event-end-date2"]').datepicker('getDate')
    }
    
    var dataSource = $('#calendar2').data('calendar').getDataSource();

    if(event.id) {
        for(var i in dataSource) {
            if(dataSource[i].id == event.id) {
                dataSource[i].price = event.para;
                dataSource[i].startDate = event.startDate;
                dataSource[i].endDate = event.endDate;
				
				$.ajax({
				url: baseUrl+ '/kiraliceesma/price',
				type: 'post',
				data: { _csrf : _csrf, id: event.id, price: event.price, start_date: event.startDate.sql(), end_date: event.endDate.sql(), villa_id: $("input[name=villa_id]").val() },
				async: false,
				success: function (data) {
					$.notify( "Fiyat güncellendi: " + event.price, { position:"top-center",  className: 'success', })
				}
			});
		
            }
        }
    }
    else
    {
		var eid = 0;
		$.ajax({
		url: baseUrl+ '/kiraliceesma/price',
		type: 'post',
		data: { _csrf : _csrf, price: event.price, start_date: event.startDate.sql(), end_date: event.endDate.sql(), villa_id: $("input[name=villa_id]").val() },
		async: false,
		success: function (data) {
			eid = data;
			$.notify( "Fiyat eklendi: "+event.price, { position:"top-center",  className: 'success', })
		}
		});
		
        event.id = eid;
    
        dataSource.push(event);
    }
    
    $('#calendar2').data('calendar').setDataSource(dataSource);
    $('#event-fiyat').modal('hide');
}

$(function() {
	$('#event-modal input[name="event-start-date"]').datepicker();
	$('#event-modal input[name="event-end-date"]').datepicker();
	$('#event-fiyat input[name="event-start-date2"]').datepicker();
	$('#event-fiyat input[name="event-end-date2"]').datepicker();
    var currentYear = new Date().getFullYear();

    $('#calendar').calendar({ 
		style :"background",
		language: "tr",
		alwaysHalfDay: true,
        enableContextMenu: true,
        enableRangeSelection: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],
        selectRange: function(e) {
            editEvent({ startDate: e.startDate, endDate: e.endDate });
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].name + '</div>'
                                    + '<div class="event-location">' + e.events[i].location + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        },
        dataSource: [

			<?php 
			foreach ($res as $r)
			{
				$sdate = explode("-", $r["start_date"]); 
				$edate = explode("-", $r["end_date"]); 
				?>

            {
                id: <?=$r["id"]?>,
                name: <?=json_encode($r["name"])?>,
                location: <?=json_encode($r["description"])?>,
                startDate: new Date(<?=$sdate[0]*1?>, <?=$sdate[1]*1-1?>, <?=$sdate[2]*1?>),
                endDate: new Date(<?=$edate[0]*1?>, <?=$edate[1]*1-1?>, <?=$edate[2]*1?>)
            },
				<?php
				//echo '{"id":'.$r["id"].',"villa_id":'.$r["villa_id"].',"name":'.json_encode($r["name"]).',"description":'.json_encode($r["description"]).',"startDate":new Date('.json_encode($r["start_date"]).'),"endDate": new Date('.json_encode($r["end_date"]).')},';
			}
			?>
        ]
    });
    

    $('#calendar2').calendar({ 
		style :"border",
		language: "tr",
		//alwaysHalfDay: true,
        enableContextMenu: true,
        enableRangeSelection: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent2
            },
            {
                text: 'Delete',
                click: deleteEvent2
            }
        ],
        selectRange: function(e) {
            editEvent2({ startDate: e.startDate, endDate: e.endDate });
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].price + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        },
        dataSource: [

			<?php 
			foreach ($prices as $r)
			{
				$sdate = explode("-", $r["start_date"]); 
				$edate = explode("-", $r["end_date"]); 
				?>

            {
                id: <?=$r["id"]?>,
                price: <?=json_encode($r["price"])?>,
                startDate: new Date(<?=$sdate[0]*1?>, <?=$sdate[1]*1-1?>, <?=$sdate[2]*1?>),
                endDate: new Date(<?=$edate[0]*1?>, <?=$edate[1]*1-1?>, <?=$edate[2]*1?>)
            },
				<?php
				//echo '{"id":'.$r["id"].',"villa_id":'.$r["villa_id"].',"name":'.json_encode($r["name"]).',"description":'.json_encode($r["description"]).',"startDate":new Date('.json_encode($r["start_date"]).'),"endDate": new Date('.json_encode($r["end_date"]).')},';
			}
			?>
        ]
    });
    
    $('#save-event').click(function() {
        saveEvent();
    });
    $('#save-event2').click(function() {
        saveEvent2();
    });
	$("#files").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
		<?php if ($data && isset($data["pictures"])) { ?>
        initialPreview: [
			<?php
				foreach($data["pictures"] as $pic)
				{
					echo '"'.Url::to('@web/images/villa/t/'.$pic.'",');
				}
			?>
        ],
        initialPreviewConfig: [
			<?php
				foreach($data["pictures"] as $pic)
				{
					echo '{caption: "'.$pic.'", width: "50px", url: "'   .Url::to('@web/kiraliceesma/deletepic')  .'", key: "'.$pic.'", extra: {id: '.$villa["id"].', _csrf: _csrf}},';
				}
			?>
        ],
		<?php }?>
		previewSettings: {
			image: {width: "150px", height: "auto"},
		}
    });
	tinymce.init({
  selector: 'textarea',
  height: 200,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
});
		
	$("#formVilla").submit( function(eventObj) {
		tinyMCE.triggerSave();
		var pics = [];
		var conf = $('#files').fileinput('getPreview').config;
		for (var i=0;i<conf.length;i++)
		{
			pics[i] = conf[i].caption;
		}
      $('input[name=pictures]').val($.toJSON(pics));
      return true;
  });
	</script>



	