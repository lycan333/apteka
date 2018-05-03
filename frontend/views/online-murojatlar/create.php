<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\OnlineMurojatlar */

$this->title = 'Tizimga murojaat qilish';
$this->params['breadcrumbs'][] = ['label' => 'Online Murojatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
