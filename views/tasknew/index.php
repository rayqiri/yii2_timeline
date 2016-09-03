<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use app\models\TasknewSearch;

$task= new TasknewSearch();
$duein = $task->duein();
$performance = $task->performance();
$clarity = $task->clarity();
$effort = $task->effort();


conquer\gii\GiiAsset::register($this);

$this->title = 'Tasknews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasknew-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <br>
    <?= Html::a('Creat Task', ['create'], [
        'class' => 'btn btn-success show-modal',
        'data-target' => '#modal_view',
        'data-header' => 'Create Tasknew',
    ]); ?>
  
    </p>
  <br>
    <?= Modal::widget([
        'id' => 'modal_view',
        'closeButton' => [
                  'label' => '',
                  
                ],
        'header' => '<a href="'.Url::to('tasknew').'" class="btn btn-danger btn-sm pull-right">X</a>',
        'size'=> Modal::SIZE_LARGE,
    ]); ?>
<div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             'task:ntext',
            [
                'attribute' => 'duein',
                'label' =>  'Duein',
                'content' => function($model, $key, $index, $column) use ($duein) {
    return $duein[$model['duein']];
},
            ],

             [
                'attribute' => 'importance',
                'label' =>  'Importance',
                'content' => function($model, $key, $index, $column) use ($performance) {
    return $performance[$model['importance']];
},
            ],

             [
                'attribute' => 'clarity',
                'label' =>  'Clarity',
                'content' => function($model, $key, $index, $column) use ($clarity) {
    return $clarity[$model['clarity']];
},
            ],
            
             [
                'attribute' => 'effort',
                'label' =>  'Effort',
                'content' => function($model, $key, $index, $column) use ($effort) {
    return $effort[$model['effort']];
},
            ],
           'priority',

            [
                'class' => 'yii\grid\ActionColumn',
                 'template' => '{update} {delete} ',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        $options = array_merge([
                            'title' => Yii::t('yii', 'Update'),
                            'aria-label' => Yii::t('yii', 'Update'),
                            'class'=>'show-modal',
                            'data-target' => '#modal_view', 
                            'data-header' => Yii::t('yii', 'Update') . ' ' . 'Tasknews',
                        ]);
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
 <br>
    <br>
    <div class="table-responsive">
    <?php
      $searchModel = new TasknewSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);
   echo $this->render('/tasknew/view2', ['dataProvider' => $dataProvider]);?>
    </div>
</div>
