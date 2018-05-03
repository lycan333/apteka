<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\search\AptekaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apyekalar';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomi',
            'manzili:ntext',
            [
                'attribute' => 'meneger',
                'format' => 'html',
                'value' => function ($r) {
                    return Html::a($r->meneger0->FIO, \yii\helpers\Url::to(['users/view', 'id' => $r->meneger]));
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view}'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
