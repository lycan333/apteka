<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OnlineMurojatlar */

$this->title = 'Create Online Murojatlar';
$this->params['breadcrumbs'][] = ['label' => 'Online Murojatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-murojatlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
