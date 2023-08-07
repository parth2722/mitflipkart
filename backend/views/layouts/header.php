<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<header>
    <nav id="w0" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">

            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1" class="navbar-nav me-auto mb-2 mb-md-0 nav">

                    <li class="nav-item"><a class="nav-link active" href="/index.php?r=site%2Fproduct">product</a></li>
                </ul>
                </ul>
                <?php if (Yii::$app->user->isGuest) { ?>
                    <form>
                    <?php } else {

                    if (Yii::$app->user->isGuest) {
                        echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
                    } else {
                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout text-decoration-none']
                            )
                            . Html::endForm();
                    }
                } ?>


                   
                    </form>
            </div>
        </div>
    </nav>
</header>