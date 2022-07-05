<?php

/** @var yii\web\View $this */
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>
<p>Menghitung Bilangan Prima</p>
<div class="site-index">

    <?php $form = ActiveForm::begin(['id' => "contact-form"
        ]); 
  ?>
    <?= $form->field($model, 'number')?>
    <?= Html::submitButton('CEK', ['number'], ['class' => 'btn btn-primary']) ?>
    <br>
    <br>
    <?php if( $is_check ) : ?>
      <?= $is_prime ? 'BILANGAN PRIMA' : 'BUKAN BILANGAN PRIMA' ?>
    <?php endif; ?>
    <?php ActiveForm::end(); ?>
</div>
