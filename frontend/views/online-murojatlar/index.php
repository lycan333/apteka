<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Murojatlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-murojatlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Murojaat yo\'llash', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'level',
            'xabar:ntext',
            'mavzu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
