<?php

namespace app\modules\admin\controllers;

use app\models\Managers;
use app\models\ManagersSearch;
use app\models\StaticFunctions;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ManagersController implements the CRUD actions for Managers model.
 */
class ManagersController extends DefaultController
{
    /**
     * @inheritDoc
     */


    /**
     * Lists all Managers models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ManagersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Managers model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Managers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Managers();

        if ($this->request->isPost) {
            if (!empty(!$model->status)){
                $model->status = 1;
            }else{
                $model->status = 0;
            }
            if ($model->load($this->request->post())) {
                if ($model->save()) {

                    $model->images = UploadedFile::getInstance($model,'images');
                    $model->images = StaticFunctions::saveImage('managers',$model->id,$model->images);

                    $model->save();

                    return $this->redirect(['index', 'id' => $model->id]);
                }else{
                    debug($model->errors);die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Managers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->images;

        if ($this->request->isPost && $model->load($this->request->post())) {
//            if (!empty(!$model->status)){
//                $model->status = 1;
//            }else{
//                $model->status = 0;
//            }

            $model->images = UploadedFile::getInstance($model,'images');

            if (!empty($model->images)){
                $model->images = StaticFunctions::saveImage('managers',$model->id,$model->images);
                StaticFunctions::deleteImage('managers',$model,$oldImage);
            }else{
                $model->images = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                debug($model->errors);die;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Managers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Managers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Managers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Managers::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
