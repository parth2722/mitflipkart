<?php

namespace frontend\controllers;

use frontend\models\Product;
use Yii;
use yii\base\InvalidArgumentException;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Shop;
use yii\web\NotFoundHttpException;

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
        return $this->render('product', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionUpdate($id)
    {
        $model = Product::find()->where(['id' => $id])->one();

        // $id not found in database   
        if ($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

        // update record   
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['testimonial']);
        }

        return $this->render('update', ['model' => $model]);
    }
}
