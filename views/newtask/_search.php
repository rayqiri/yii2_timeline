<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewtaskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="newtask-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'task') ?>

    <?= $form->field($model, 'duein') ?>

    <?= $form->field($model, 'importance') ?>

    <?= $form->field($model, 'clarity') ?>
     <?= $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'effort') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
