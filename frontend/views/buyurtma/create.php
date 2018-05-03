<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Buyurtma */

$this->title = 'Buyurtma berish';
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

