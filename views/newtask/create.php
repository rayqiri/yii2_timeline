<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Newtask */

$this->title = 'Create Newtask';
$this->params['breadcrumbs'][] = ['label' => 'Newtasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newtask-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
