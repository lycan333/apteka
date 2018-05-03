<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Apteka */

$this->title = 'Create Apteka';
$this->params['breadcrumbs'][] = ['label' => 'Aptekas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

