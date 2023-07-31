<?php
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?=Url::to(['/','id'=>1])?>" class="nav-item">MENU 1</a>
<br>
<a href="<?=Url::to(['/','id'=>2])?>" class="nav-item">MENU 2</a>
<br>
<a href="<?=Url::to(['/','id'=>3])?>" class="nav-item">MENU 3</a>

</body>
</html>