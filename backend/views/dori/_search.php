<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\search\DoriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dori-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomi') ?>

    <?= $form->field($model, 'firmaId') ?>

    <?= $form->field($model, 'seria') ?>

    <?= $form->field($model, 'madeDate') ?>

    <?php // echo $form->field($model, 'DeadLine') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
