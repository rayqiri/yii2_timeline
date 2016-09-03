<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Timeline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
<div class="col-sm-4">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'class'=>'form-control']) ?>
</div>
</div>
 <div class="row">
<div class="col-sm-4">
    <?php echo $form->field($model, 'tgl')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
</div>
</div>
<div class="col-sm-20">
    <?= $form->field($model, 'item')->textarea(['rows' => 10]) ?>
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
