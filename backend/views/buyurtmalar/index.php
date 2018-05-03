<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\search\BuyurtmaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buyurtmalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyurtma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dori.nomi',
            'soni',
            'apteka.nomi',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
