<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biodata */

$this->title = 'Update Biodata: ' . $model->id_biodata;
$this->params['breadcrumbs'][] = ['label' => 'Biodatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_biodata, 'url' => ['view', 'id_biodata' => $model->id_biodata]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biodata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
