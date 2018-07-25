<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProgressStock */

$this->title = Yii::t('app', 'Create Progress Stock');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Progress Stocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progress-stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
