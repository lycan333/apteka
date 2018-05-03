<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\OnlineMurojatlar */

$this->title = $model->mavzu;
$this->params['breadcrumbs'][] = ['label' => 'Online Murojatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-murojatlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ortga qaytish', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'level',
            'mavzu',
            'xabar:ntext',
            [
                'attribute' => 'UserId',
                'value' => function ($r) {
                    return \backend\models\User::find()->where("id=".$r->UserId)->one()->FIO;
                }
            ],
        ],
    ]) ?>

</div>
