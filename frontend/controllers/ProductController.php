<?php

namespace frontend\controllers;

use frontend\models\Product;
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

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['shop'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionShop()
    {
        $model = Product::find()->all();

        return $this->render('shop', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
