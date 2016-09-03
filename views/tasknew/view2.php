<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\models\TasknewSearch;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$task= new TasknewSearch();
$duein = $task->duein();
$performance = $task->performance();
$clarity = $task->clarity();
$effort = $task->effort();

?>




   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
        
        <?php
        /*
           Modal::begin([

            'header' => '<h2>Create Task</h2>',
            'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
                'toggleButton' => [
                    'label' => '<i class="glyphicon glyphicon-plus"></i> Add Task',
                    'class' => 'btn btn-success'
                ],
                'closeButton' => [
                  'label' => 'X',
                  'class' => 'btn btn-danger btn-sm pull-right',
                ],
                'size' => Modal::SIZE_LARGE,
            ]);
            $myModel = new \app\models\Task;
            echo $this->render('/task/create', ['model' => $myModel]);
            Modal::end();
          
      /*    Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
    'size' => Modal::SIZE_LARGE,
    //keeps from closing modal with esc key or by clicking out of the modal.
    // user must click cancel or X to close
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
]);
echo "<div id='modalContent'></div>";
Modal::end();  */
        ?>
    </p>
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

            ['class' => 'yii\grid\ActionColumn',
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
   
