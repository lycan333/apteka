<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Buyurtma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buyurtma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doriId')->textInput() ?>

    <?= $form->field($model, 'soni')->textInput() ?>

    <?= $form->field($model, 'aptekaId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
