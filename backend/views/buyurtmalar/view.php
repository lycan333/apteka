<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Buyurtma */

$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyurtma-view">

    <p>
        <?= Html::a('Ortga', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dori.nomi',
            'dori.firma.name',
            'soni',
            'apteka.nomi',
        ],
    ]) ?>

</div>
