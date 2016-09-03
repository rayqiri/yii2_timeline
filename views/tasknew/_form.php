<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\slider\Slider;
/* @var $this yii\web\View */
/* @var $model app\models\Tasknew */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">

    <?php $form = ActiveForm::begin(['enableClientValidation'=>false, 'options' => ['data-ajax' => true],
    'fieldConfig' => [
                
                'labelOptions' => ['class' => 'col-md-4 control-label'],
            ]
            ]) ?>
<div class="col-sm-4 col-xs-6">
    <?= $form->field($model, 'task')->textarea(['rows' => 6]) ?>
</div>
   <div class="clearfix visible-xs-block"></div>
   <br>
    <br>
<div class="col-sm-4 col-md-4">
<?= $form->field($model, 'duein')->widget(Slider::classname(),[
    'name'=>'duein',
    'value'=>0,
        'sliderColor'=>Slider::TYPE_PRIMARY,
    'handleColor'=>Slider::TYPE_PRIMARY,
    'pluginOptions'=>[
        'min'=>0,
        'max'=>1,
        'step'=>1,
        'ticks'=>[
        1,2
        ],
        'ticks_labels'=>[
        'This Week',
        'Not <br>This Week'
        ],
        'ticks_positions'=>[
        0,100
        ],
        'ticks_snap_bounds'=>1,
        'tooltip'=>'hide',
        'formatter'=>new yii\web\JsExpression("function(val) { 
            if (val <=0) {
                return 'This Week';
            }
            
            if (val <= 1) {
                return 'Not This Week';
            }
        }")
    ]
]);
                    ?>
    </div>
    
    <div class="col-sm-4 col-md-4">                 
<?= $form->field($model, 'importance')->widget(Slider::classname(),[
    'name'=>'importance',
    
        'sliderColor'=>Slider::TYPE_PRIMARY,
    'handleColor'=>Slider::TYPE_PRIMARY,
    'pluginOptions'=>[
        'min'=>1,
        'max'=>3,
        'step'=>1,
        'ticks'=>[
        1,2,3
        ],
        'ticks_labels'=>[
        'Low',
        'Medium',
        'High'
        ],
        'ticks_positions'=>[
        0,50,100
        ],
        
        'tooltip'=>'hide',
        'formatter'=>new yii\web\JsExpression("function(val) { 
            if (val <=1) {
                return 'Low';
            }
            if (val <=2) {
                return 'Medium';
            }
            if (val <= 3) {
                return 'High';
            }
        }")
    ]
]);
                    ?>
  </div>
  <br><br><br><br><br><br>
  <div>
  <div class="col-sm-4 col-md-4">
<?= $form->field($model, 'clarity')->widget(Slider::classname(),[
    'name'=>'clarity',
    'value'=>0,
        'sliderColor'=>Slider::TYPE_PRIMARY,
    'handleColor'=>Slider::TYPE_PRIMARY,
    'pluginOptions'=>[
        'min'=>0,
        'max'=>2,
        'step'=>1,
        'ticks'=>[
        1,2,3
        ],
        'ticks_labels'=>[
        'Not Clear',
        'Somewhat <br>Clear',
        'Clear'
        ],
        'ticks_positions'=>[
        0,50,100
        ],
        'tooltip'=>'hide',
        'formatter'=>new yii\web\JsExpression("function(val) { 
            if (val <=10) {
                return 'Not Clear';
            }
            if (val <=20) {
                return 'Somewhat Clear';
            }
            if (val <= 30) {
                return 'Clear';
            }
        }")
    ]
]);
                    ?>
</div>

<div class="col-sm-4 col-md-4">
<?= $form->field($model, 'effort')->widget(Slider::classname(),[
    'name'=>'effort',
    'value'=>1,
        'sliderColor'=>Slider::TYPE_PRIMARY,
    'handleColor'=>Slider::TYPE_PRIMARY,
    'pluginOptions'=>[
        'min'=>1,
        'max'=>3,
        'step'=>1,
        'ticks'=>[
        1,2,3
        ],
        'ticks_labels'=>[
        'Low',
        'Medium',
        'High'
        ],
        'ticks_positions'=>[
        0,50,100
        ],
        
        'tooltip'=>'hide',
        'formatter'=>new yii\web\JsExpression("function(val) { 
             if (val <=10) {
                return 'Low';
            }
            if (val <=20) {
                return 'Medium';
            }
            if (val <= 30) {
                return 'High';
            }
        }")
    ]
]);
                    ?>
   

</div>
</div>
<br>
    <br>
    <br><br><br><br>
    <div class="col-sm-4 col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end() ?>

</div>
