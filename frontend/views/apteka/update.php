<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Apteka */

$this->title = 'Malumotlarni o\'zgartirish: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Aptekas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
