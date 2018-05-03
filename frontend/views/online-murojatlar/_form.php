<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$arr = [
    'Ariza',
    'Etiroz',
    'Iltimosnoma',
    'Taklif'
]

/* @var $this yii\web\View */
/* @var $model frontend\models\OnlineMurojatlar */
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

                <?= $form->field($model, 'level')->dropDownList($arr) ?>
                <?= $form->field($model, 'mavzu')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'xabar')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

