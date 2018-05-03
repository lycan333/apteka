<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Buyurtma */

$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dori.nomi',
            'soni',
            'dori.firma.name',
        ],
    ]) ?>
