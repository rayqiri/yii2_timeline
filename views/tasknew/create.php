<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tasknew */

conquer\gii\GiiAsset::register($this);

$this->title = Yii::t('yii', 'Create') . ' ' . 'Tasknew';
$this->params['breadcrumbs'][] = ['label' => 'Tasknews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tasknew-create">

    <?php if(!\Yii::$app->request->isAjax): ?>
    
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php endif ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>