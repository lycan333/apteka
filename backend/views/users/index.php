<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydalanuvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'FIO',
            'tel',
            [
                'attribute' => 'created_at',
                'value' => function ($r) {
                    return date("d/M/Y");
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{delete}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
