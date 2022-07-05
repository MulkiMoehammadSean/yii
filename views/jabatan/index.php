<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Jabatan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jabatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jabatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jabatan',
            'jabatan',
            'kode_jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jabatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jabatan' => $model->id_jabatan]);
                 }
            ],
        ],
    ]); ?>


</div>
