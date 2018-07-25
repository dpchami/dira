<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ConfirmedOrder */

$this->title = Yii::t('app', 'Create Confirmed Order');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Confirmed Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="confirmed-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
