<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estates */

$this->title = 'Create Estates';
$this->params['breadcrumbs'][] = ['label' => 'Estates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
