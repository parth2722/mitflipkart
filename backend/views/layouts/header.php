<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<header>
    <nav id="w0" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="/index.php">My Application</a>
<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div id="w0-collapse" class="collapse navbar-collapse">
<ul id="w1" class="navbar-nav me-auto mb-2 mb-md-0 nav"><li class="nav-item"><a class="nav-link active" href="/index.php?r=site%2Findex">Home</a></li></ul><form class="d-flex" action="/index.php?r=site%2Flogout" method="post">
<input type="hidden" name="_csrf-backend" value="Fd8bJ_pux0ncKHpgvMqCrMMNtOSkneAQpAzMxANTiJRgvilzuyaNEZtjMFmNiMaYhFmNqtLuj2LoRfmWNSDb3A=="><button type="submit" class="btn btn-link logout text-decoration-none">Logout (parth)</button></form></div>
</div>
</nav></header>