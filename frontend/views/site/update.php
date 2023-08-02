<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<div class="container">
    <h3>Update Product</h3>
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'product_name')->textarea() ?>
    <?= $form->field($model, 'price')->textarea() ?>
    <?= $form->field($model, 'slug')->textarea() ?>
    <?= $form->field($model, 'sku')->textarea() ?>
    <?= Html::submitButton('update', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end() ?>
</div>