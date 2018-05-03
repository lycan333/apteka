<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Firma */

$this->title = 'Firmani tahrirlash: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Firmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
