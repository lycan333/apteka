<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\search\DoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Mahsulot qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomi',
            'firma.name',
            'seria',
            'madeDate',
            //'DeadLine',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
