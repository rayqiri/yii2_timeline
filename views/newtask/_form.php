<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Newtask */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
<div class="col-sm-4 col-xs-6">
    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'task')->textarea(['rows' => 6]) ?>
  
   </div>
   <div class="clearfix visible-xs-block"></div>
<div class="col-sm-4 col-md-4">
 <label class="radio-head">Due In</label>
 <div id="radios">
 
 <?php $model->duein ='This Week';?>
 <?=
                    $form->field($model, 'duein')
                        ->radioList(
                            ['This Week' => 'This Week', 'Not This Week' => 'Not This Week'],
                            [
                                'item' => function($index, $label, $name, $checked, $value) {

                                    $return = '<label class="modal-radio">';
                                    $return .= '<input type="radio" id="option1" name="' . $name . '" value="' . $value . '"'.$checked.'>';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label>';

                                    return $return;
                                }
                            ]
                        )
                    ->label(false);
                    ?>


</div>
</div>

<div class="col-sm-4 col-md-4">
<label class="radio-head">Importance</label>
<div id="radios2">

<?php $model->importance = 'Low';?>
 <?=
                    $form->field($model, 'importance')
                        ->radioList(
                            ['Low' => 'Low', 'Medium' => 'Medium','High' => 'High'],
                            [
                                'item' => function($index, $label, $name, $checked, $value) {

                                    $return = '<label class="modal-radio">';
                                    $return .= '<input type="radio" id="option1" name="' . $name . '" value="' . $value . '"'.$checked.'>';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label>';

                                    return $return;
                                }
                            ]
                        )
                    ->label(false);
                    ?>
</div>
</div>

<div class="col-sm-4 col-md-4">
<label class="radio-head">Clarity</label>
<div id="radios3">

<?php $model->clarity = 'Not Clear';?>
 <?=
                    $form->field($model, 'clarity')
                        ->radioList(
                            ['Not Clear' => 'Not Clear', 'Somewhat Clear' => 'Somewhat Clear','Clear' => 'Clear'],
                            [
                                'item' => function($index, $label, $name, $checked, $value) {

                                    $return = '<label class="modal-radio">';
                                    $return .= '<input type="radio" id="option1" name="' . $name . '" value="' . $value . '"'.$checked.'>';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label>';

                                    return $return;
                                }
                            ]
                        )
                    ->label(false);
                    ?>

</div>
</div>
<div class="col-sm-4 col-md-4">
<label class="radio-head">Effort</label>
<div id="radios4">
<?php $model->effort = 'Low';?>
 <?=
                    $form->field($model, 'effort')
                        ->radioList(
                            ['Low' => 'Low', 'Medium' => 'Medium','High' => 'High'],
                            [
                                'item' => function($index, $label, $name, $checked, $value) {

                                    $return = '<label class="modal-radio">';
                                    $return .= '<input type="radio" id="option1" name="' . $name . '" value="' . $value . '"'.$checked.'>';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label>';

                                    return $return;
                                }
                            ]
                        )
                    ->label(false);
                    ?>
</div></div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
