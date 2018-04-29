<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Apteka */

$this->title = 'Create AptekaSearch';
$this->params['breadcrumbs'][] = ['label' => 'Aptekas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apteka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
