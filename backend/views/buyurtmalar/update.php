<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Buyurtma */

$this->title = 'Update Buyurtma: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
