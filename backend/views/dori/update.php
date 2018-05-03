<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dori */
\backend\assets\DateTimePicker::register($this);
$this->title = 'Malumotni tahrilash: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Doris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
