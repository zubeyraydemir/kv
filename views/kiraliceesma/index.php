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
<?php 
foreach ($estates as $estate)
{?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="" data-parent="#estateslist" href="<?=Url::to('@web/kiraliceesma/villa/').$estate["name"]?>"><?=$estate["name"]?></a>
        </h4>
    </div>
</div>
<?php }
?>
</div>
