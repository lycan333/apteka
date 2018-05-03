<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="center-block" style="width: 50%">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    Buyurtma berish
                </div>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'firmaId')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\Firma::find()->all(),'id','name')) ?>

                <?= $form->field($model, 'seria')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'madeDate')->textInput(['options'=>[
                        'class'=>'form-control datepicker',
                ]]) ?>

                <?= $form->field($model, 'DeadLine')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
