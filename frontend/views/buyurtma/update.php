<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Buyurtma */

$this->title = 'Buyurtmani o\'zgartirish: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
