<?php

namespace backend\controllers;

use common\models\LoginForm;
use frontend\models\Product;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [

                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['product'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    [
                        'actions' => ['product', 'update', 'delete', 'create', 'restore'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionProduct()
    {
        // $model = Product::find()->ignoreSoftDelete()->all();
        $model = Product::find()->all();

        return $this->render('product', ['model' => $model]);
    }

    public function actionCreate()
    {

        $model = new Product();

        // new record   
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['product']);
        }

        return $this->render('create', ['model' => $model]);
    }
    public function actionUpdate($id)
    {
        $model = Product::find()->where(['id' => $id])->one();

        // $id not found in database   
        if ($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

        // update record   
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['product']);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Product::findOne($id);

        // $id not found in database   
        if ($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

        // delete record   
        $model->delete();

        return $this->redirect(['product']);
    }

    public function actionRestore($id)
    {
        $model = Product::find()->where(['id' => $id])->one();

       if ($model === null){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        if ($model->restore()) {
            Yii::$app->session->setFlash('success', 'Record restored successfully.');
        } else {
            Yii::$app->session->setFlash('error', 'Unable to restore the record.');
        }

        return $this->redirect(['product']); // Redirect to the appropriate action
    }
}
