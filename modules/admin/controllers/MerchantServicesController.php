<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\MerchantService;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MerchantServicesController implements the CRUD actions for MerchantService model.
 */
class MerchantServicesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MerchantService models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MerchantService::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MerchantService model.
     * @param integer $merchant_id
     * @param integer $service_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($merchant_id, $service_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($merchant_id, $service_id),
        ]);
    }

    /**
     * Creates a new MerchantService model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MerchantService();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'merchant_id' => $model->merchant_id, 'service_id' => $model->service_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MerchantService model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $merchant_id
     * @param integer $service_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($merchant_id, $service_id)
    {
        $model = $this->findModel($merchant_id, $service_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'merchant_id' => $model->merchant_id, 'service_id' => $model->service_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MerchantService model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $merchant_id
     * @param integer $service_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($merchant_id, $service_id)
    {
        $this->findModel($merchant_id, $service_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MerchantService model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $merchant_id
     * @param integer $service_id
     * @return MerchantService the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($merchant_id, $service_id)
    {
        if (($model = MerchantService::findOne(['merchant_id' => $merchant_id, 'service_id' => $service_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
