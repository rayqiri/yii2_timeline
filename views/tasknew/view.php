<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tasknew */

conquer\gii\GiiAsset::register($this);

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasknews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasknew-view">

    <?php if(!\Yii::$app->request->isAjax): ?>
  
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('yii', 'Update') , ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('yii', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php endif ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'task',
            'duein',
            'importance',
            'clarity',
            'effort',
        ],
    ]) ?>

</div>
