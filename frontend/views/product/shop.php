<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'shop';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">
      <?php foreach ($model as $product) : ?>
        <!-- Render the item_view.php for each item -->
        <?= $this->render('product', ['product' => $product]) ?>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="btn-box">
    <a href="">
      View All Products
    </a>
  </div>
  </div>
</section>