<?php

use app\components\FirstWidget;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;

 
$dataProvider = new ArrayDataProvider([
  'allModels' => $model,
]);

?>
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

<!-- <div class="container">
<div class="row">
  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="box">
      <a href="">
        <div class="img-box">
          <img src="/images/q.png" alt="">
        </div>
        <div class="detail-box">

          </h6>
        </div>
        <div class="new">
          <span>
            New
          </span>
        </div>
      </a>
    </div>
  </div>

</div>
</div> -->


<?php FirstWidget::begin(); ?>
      First Widget 
<?php FirstWidget::end(); ?>  
</div>
