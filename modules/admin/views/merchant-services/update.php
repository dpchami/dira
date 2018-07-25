<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MerchantService */

$this->title = Yii::t('app', 'Update Merchant Service: ' . $model->merchant_id, [
    'nameAttribute' => '' . $model->merchant_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchant Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->merchant_id, 'url' => ['view', 'merchant_id' => $model->merchant_id, 'service_id' => $model->service_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="merchant-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
