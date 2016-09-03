<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewtaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newtasks';
?>
<div class="newtask-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Newtask', ['create'], ['class' => 'btn btn-success']) ?>
        <?php
           Modal::begin([
            'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
                'toggleButton' => [
                    'label' => '<i class="glyphicon glyphicon-plus"></i> Add',
                    'class' => 'btn btn-success'
                ],
                'closeButton' => [
                  'label' => 'X',
                  'class' => 'btn btn-danger btn-sm pull-right',
                ],
                'size' => 'modal-lg',
            ]);
            $myModel = new \app\models\Newtask;
            $myview = new yii\web\View;
            echo "<div id='modalContent'>".$this->render('/newtask/create', ['model' => $myModel])."</div>";
            Modal::end();
            
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'task',
            'duein',
            'importance',
            'clarity',
            // 'effort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
