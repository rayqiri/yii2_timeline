<?php

namespace app\controllers;

use Yii;
use app\models\Tasknew;
use app\models\TasknewSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TasknewController implements the CRUD actions for Tasknew model.
 */
class TasknewController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function render($view, $params = [])
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax($view, $params);
        } else {
            return parent::render($view, $params);
        }
    }

    /**
     * Lists all Tasknew models.
     * @return mixed
     */
    public function actionIndex(){
    if (Yii::$app->getRequest()->getIsPjax()) {
    return $this->redirect(['index'], 200); // forwards also in IE.
}
        $searchModel = new TasknewSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tasknew model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tasknew model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tasknew();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        $task=$_POST['Tasknew']['task'];
        $duein=$_POST['Tasknew']['duein'];
           
        $importance=$_POST['Tasknew']['importance'];
            
        $clarity=$_POST['Tasknew']['clarity'];
            
        $effort=$_POST['Tasknew']['effort'];
            
            $priority=$importance * $effort;
            $model->task=$task;
            $model->duein=$duein;
            $model->importance=$importance;
            $model->clarity=$clarity;
            $model->effort=$effort;
            $model->priority=$priority;    
            $model->save();
            if (Yii::$app->request->isAjax) {
                return $this->redirect(['index']);
            } else {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tasknew model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
             $task=$_POST['Tasknew']['task'];
        $duein=$_POST['Tasknew']['duein'];
           
        $importance=$_POST['Tasknew']['importance'];
            
        $clarity=$_POST['Tasknew']['clarity'];
            
        $effort=$_POST['Tasknew']['effort'];
            
            $priority=$importance * $effort;
            $model->task=$task;
            $model->duein=$duein;
            $model->importance=$importance;
            $model->clarity=$clarity;
            $model->effort=$effort;
            $model->priority=$priority;    
            $model->save();
            if (Yii::$app->request->isAjax) {
                return $this->redirect(['index']);
            } else {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tasknew model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tasknew model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tasknew the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tasknew::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
