<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nomi',
            'firmaId',
            'seria',
            'madeDate',
            //'DeadLine',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
