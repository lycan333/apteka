<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\OnlineMurojatlar */

$this->title = 'Murojaatni o\'zgartirish: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Online Murojatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
