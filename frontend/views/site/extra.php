<?php
use frontend\models\Product;
use yii\grid\GridView;
use yii\helpers\Html;
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


..............................................


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


..................................................................
<?php
use yii\db\Migration;

class mYYYYMMDD_HHMMSS_create_comment_table extends Migration
{
    public function up()
    {
        // Create the comment table
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer(), // Foreign key column
            'content' => $this->text(),
        ]);

        // Add foreign key relationship
        $this->addForeignKey(
            'fk-comment-post_id', // Foreign key name
            '{{%comment}}',       // Child table
            'post_id',            // Child column
            '{{%post}}',          // Parent table
            'id',                 // Parent column
            'CASCADE'             // On delete behavior
        );
    }

    public function down()
    {
        // Drop the foreign key and then the comment table
        $this->dropForeignKey('fk-comment-post_id', '{{%comment}}');
        $this->dropTable('{{%comment}}');
    }
}




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

<?php
use app\components\HelloWidget;
?>
<?= HelloWidget::widget(['message' => 'Good morning']) ?>



......................................................................

<?= $form->field($model, 'imageFile')->fileInput() ?>

<!-- Display the current image if available -->
<?php if ($model->image): ?>
    <div class="form-group">
        <label>Current Image</label>
        <?= Html::img('/home/parth/Downloads/' . $model->image, ['class' => 'img-responsive']) ?>
    </div>
<?php endif; ?>




public function actionUpload()
    {
        $model = new Product();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // File uploaded successfully
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
