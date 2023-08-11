<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<br>
<br>

<br>
<div class="container">
<?php Pjax::begin(); ?>


    <h3>Update Product</h3>
  
    <?php $form = ActiveForm::begin() ?>
    <div class="form-group red">
        <?= $form->field($model, 'product_name')->textarea() ?>

        <?= $form->field($model, 'price')->textarea() ?>
        <?= $form->field($model, 'slug')->textarea() ?>
        <?= $form->field($model, 'sku')->textarea() ?>
        <?= Html::submitButton('update', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end() ?>

    <?php
    if(!empty($response))
    {
        echo '<div class="alert alert-success">'.$response.'<div>';
    }
?>
    <?php Pjax::end(); ?>

</div>

<?= html::style('.red{color:grey;}'); ?>