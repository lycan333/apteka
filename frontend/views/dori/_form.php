<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firmaId')->textInput() ?>

    <?= $form->field($model, 'seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'madeDate')->textInput() ?>

    <?= $form->field($model, 'DeadLine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
