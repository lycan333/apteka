<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Buyurtma */

$this->title = 'Create Buyurtma';
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
