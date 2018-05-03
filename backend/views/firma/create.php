<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Firma */

$this->title = 'Firma qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Firmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
