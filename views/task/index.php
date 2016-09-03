<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\models\TaskSearch;
use app\models\Task;
use kartik\slider\Slider;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$task= new TaskSearch();
$duein = $task->duein();
$performance = $task->performance();
$clarity = $task->clarity();
$effort = $task->effort();
?>


<div class="task-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
        
        <?php
        
           Modal::begin([

            'header' => '<h2>Create Task</h2>',
            'headerOptions' => ['id' => 'modalHeader'],
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

             
             Modal::begin([
        'id'=>'modal',
        'size' =>Modal::SIZE_LARGE,
]);
             $myModel = new \app\models\Task;
            echo $this->render('/task/update', ['model' => $myModel]);
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
    <br>
    <div class="table-responsive">
<?php
/*
$categories = $task->duein();
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array(
            'name'=>'duein',
            'value'=>function($data,$row) use ($categories){
                return $categories[$data->duein];
            },
        ),
    ),
));
*/
?>
<?php Pjax::begin(['id'=>'Tasks']) ?>
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
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>','#', [
                    'class' => 'activity-view-link',
                    'title' => Yii::t('yii', 'Update'),
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'data-id' => $key,
                    'data-pjax' => '0',

                ]);
            },
        ],

            ],

        ],
    ]); 
    ?>
    <?php
    /*$this->registerJs('
       $(".activity-view-link").click(function() {
    $.get(
            task/update   
        {
            id: $(this).closest("tr").data("key")
        },
        function (data) {
            $(".modal-body").html(data);
            $("#activity-modal").modal();
        }  
    );
});
        ',$this::POS_READY);
    */?>
    <?php Pjax::end() ?>
    </div>
    <br>
    <br>
    <div class="table-responsive">
    <?php
      $searchModel = new TaskSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);
   echo $this->render('/task/view2', ['dataProvider' => $dataProvider]);?>
    </div>
</div>
