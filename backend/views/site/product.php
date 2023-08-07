<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'product';
?>
<br>
<br>

<br>
<section class="client_section layout_padding">
  <div class="container">


    <a href="<?= Url::to(['create']) ?>" class="btn btn-success push-right">Create </a>
    <a href="<?= Url::to(['restore']) ?>" class="btn btn-success push-right">Restore </a>
    <table class="table table-striped table-bordered">
      <tr>

        <th>ID</th>
        <th>product_name</th>
        <th>price</th>
        <th>slug</th>
        <th>sku</th>
        <th>operation</th>
      </tr>
      <?php

      foreach ($model as $product) { ?>
        <tr>

          <td><?= $product->id ?></td>
          <td> <?= $product->product_name ?></td>
          <td> <?= $product->price ?></td>
          <td> <?= $product->slug ?></td>
          <td> <?= $product->sku ?></td>
          <td>
            <a style="color: blue;" href="<?= Url::to(['update', 'id' => $product->id]) ?>">Update</a>
            <a style="color: red;" href="<?= Url::to(['delete', 'id' => $product->id]) ?>">Delete</a>
          </td>
        </tr>
      <?php

      } ?>
    </table>

  </div>
</section>