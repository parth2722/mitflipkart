<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

// ... Other code ...

$this->registerJsFile('/frontend/@web/js/ajax.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<div class="container">
    <?php $form = ActiveForm::begin([
        'id' => 'product-form', // Added ID for targeting in JavaScript
        'options' => ['enctype' => 'multipart/form-data'] // This is important for file uploads
    ]); ?>   
   
    <?= $form->field($model, 'product_name'); ?>   
    <?= $form->field($model, 'price'); ?>   
    <?= $form->field($model, 'slug'); ?>   
    <?= $form->field($model, 'sku'); ?>   
   



    <!-- Display the current image if available -->
    <?php if ($model->image): ?>
        <div class="form-group">
            <label>Current Image</label>
            <?= Html::img('/home/parth/Downloads/' . $model->image, ['class' => 'img-responsive']) ?>
        </div>
    <?php endif; ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
    'class' => $model->isNewRecord ? 'btn btn-success ajax-button' : 'btn btn-primary ajax-button', // Add the ajax-button class here
]); ?>
 
   
    <?php ActiveForm::end(); ?> 
</div>
