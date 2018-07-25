<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MainStock */

$this->title = Yii::t('app', 'Create Main Stock');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Main Stocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
