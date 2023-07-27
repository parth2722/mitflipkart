<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Shop;

/**
 * Pite controller
 */
class ProductController extends Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionShop()
    {
        return $this->render('shop');
    }

}
