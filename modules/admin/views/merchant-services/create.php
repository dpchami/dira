<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MerchantService */

$this->title = Yii::t('app', 'Create Merchant Service');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchant Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
