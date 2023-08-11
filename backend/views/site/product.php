<?php

use frontend\models\Product;
use yii\data\ArrayDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;

$dataProvider = new ArrayDataProvider([
    'allModels' => $model,
]);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>

            <?php Pjax::begin(['id' => 'products-pjax']); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'product_name',
                    'price',
                    'slug',
                    'sku',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
                // Add the pager option
                'pager' => [
                    'class' => LinkPager::class,
                ],

                
            ]) ?>

            <?php Pjax::end(); ?>

        </div>
    </div>
</div>
