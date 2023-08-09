<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

?>

<div class="container">
    <?php Pjax::begin(); ?>
    <?php echo Html::beginForm(['pjax'],'post',['data-pjax'=>'']) ?>
    <?php echo html::label('Message','message') ?>
    <?php echo Html::input('text' , 'message',Yii::$app->request->post('string'),['class' => 'form-control']) ?>
    <?php echo Html::submitButton('Submit',['class' => 'btn btn-primary','name' => 'send-message']) ?>
    <?php echo Html::endForm()?>
    <?php
    if(!empty($response))
    {
        echo '<div class="alert alert-success">'.$response.'<div>';
    }
?>
    <?php Pjax::end();?>

</div>
<br>
<br>