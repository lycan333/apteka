<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Buyurtma */
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

                <?= $form->field($model, 'doriId')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\Dori::find()->all(),'id','nomi')) ?>

                <?= $form->field($model, 'soni')->textInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Buyurtma berish', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
