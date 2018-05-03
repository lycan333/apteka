<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dori */
\backend\assets\DateTimePicker::register($this);
$this->title = 'Dori qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Doris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

