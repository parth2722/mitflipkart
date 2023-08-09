<?php
use frontend\models\Product;
use yii\grid\GridView;
use yii\widgets\DetailView;


$productId = 1;
$product = Product::findOne($productId);

?>

<div class="container">
    <?= DetailView::widget([
        'model' => $product,
        'attributes' => [
            'id',
            'product_name',
            'price',
            'slug',
            'sku',
        ],
    ]) ?>


...............


<div class="container">
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
      'id',
      'product_name',
      'price',
      'slug',
      'sku',
     
         ['class'=>'yii\grid\ActionColumn']
    ],
    
 
  ]) ?>