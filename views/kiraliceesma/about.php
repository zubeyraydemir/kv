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
					Hakkımızda
				</h4>
			</a>
		</div>
		<div id="collapseNew" class="panel-collapse collapse in">
			<div class="panel-body">
				<form id="formAbout" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?=Url::to('@web/kiraliceesma/saveabout')?>">
					<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
					
					<div class="form-group"> 
						<div class="col-sm-12">
							<textarea class="form-control" id="description" name="description"><?=($about?$about:"")?></textarea>
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
</div>
</div> 
<script>
jQuery(document).ready(function(){
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
		
	$("#formAbout").submit( function(eventObj) {
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



	