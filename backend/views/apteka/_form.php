<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Apteka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apteka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manzili')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meneger')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
