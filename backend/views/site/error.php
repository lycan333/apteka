<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
   <div class="panel panel-danger center-block" style="width:33.333%">
<div class="panel-heading ">
    <div class="panel-title">
        <?= Html::encode($this->title) ?>
    </div>
</div>
       <div class="panel-body">

           <div class="alert alert-danger">
               <?= nl2br(Html::encode($message)) ?>
           </div>

           <p>
               The above error occurred while the Web server was processing your request.
           </p>
           <p>
               Please contact us if you think this is a server error. Thank you.
           </p>
       </div>
   </div>
</div>

