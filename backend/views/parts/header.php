<?

use yii\helpers\Html;

?>
<div class="row">

    <div class="col-md-6 col-sm-8 clearfix">

    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">

            <!-- Language Selector -->


            <li>
                <?= Html::a('Chiqib ketish', ['site/logout'], ['data-method' => 'post']) ?>
            </li>
        </ul>

    </div>

</div>

<hr/>