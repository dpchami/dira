<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drink */

$this->title = Yii::t('app', 'Create Drink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Drinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
