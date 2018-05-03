<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Apteka */

$this->title = $model->getAttribute('nomi');
$this->params['breadcrumbs'][] = ['label' => 'Aptekas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apteka-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'nomi',
            'manzili:ntext',
            [
                'attribute' => 'meneger',
                'format' => 'html',
                'value' => function ($r) {
                    return Html::a($r->meneger0->FIO, \yii\helpers\Url::to(['users/view', 'id' => $r->meneger]));
                }
            ],
        ],
    ]) ?>

</div>
