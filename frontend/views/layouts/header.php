<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="index.php">
      <span>
        Giftos
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shop">
            Shop
          </a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="<?= Url::to('/why') ?>">Why Us </a>
        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= Url::to('/pjax') ?>">Pjax </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/testimonial">
            Testimonial
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>

        <?php if (Yii::$app->user->isGuest) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['/login']) ?>">Login</a>
          </li>
      </ul>
      <div class="user_option">
        <a href="">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>
            <a class="nav-link" href="<?= Url::to(['/signup']) ?>">Signup</a>
          </span>
        </a>
      <?php } else {

          echo '<li class="user_logout">' .
            Html::beginForm(['/site/logout']);
          echo  Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout text-decoration-none']
          );
          echo Html::endForm() . '</li>';
        } ?>



      <a href="">
        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
      </a>
      <form class="form-inline ">
        <button class="btn nav_search-btn" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>

      </div>
    </div>
  </nav>
</header>