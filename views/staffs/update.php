<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Staff */

$this->title = Yii::t('app', 'Update Staff: ' . $model->user_id, [
    'nameAttribute' => '' . $model->user_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
