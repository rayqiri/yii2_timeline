<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Task */



?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('custom', [
        'model' => $model,
    ]) ?>

</div>
