<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
$this->registerCss('
   .navbar-default {
      border-bottom-color: green;
      border-bottom-width: 5px;
    }
    nav.navbar .navbar-left li a, .nav.navbar-nav.navbar-right li a {
      color: #483d8b;
    }

    .nav.navbar-nav.navbar-left li a:hover, a:focus {
        background-color:#1b7203;
        color:white;
    }

    .navbar-default .navbar-brand {
      color: #483d8b;
    }
');
?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->params['systemName'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
            'id' => 'topnav',
        ],
    ]);
    echo Nav::widget([
        'dropDownCaret' => '',
        'options' => [
            'class' => 'navbar-nav navbar-left',
            'id' => 'navbar',
        ],
        'items' => [
            ['label' => Yii::t('app','Nyumbani'), 'url' => ['/counter/default/nyumbani']],
            ['label' => Yii::t('app','Stoo'), 'url' => ['#']],
            [
            'label' => Yii::t('app','Taarifa'),
                'items' => [
                     ['label' => Yii::t('app','Wahudumu'), 'url' =>'#access'],
                     ['label' => Yii::t('app','Mauzo'), 'url' => '/#'],
                     ['label' => Yii::t('app','Vinywaji'), 'url' => '#'],
                ],
            ],
            ['label' => Yii::t('app','Manunuzi'), 'url' => ['#']],
        ],
    ]);

    echo Nav::widget([
        'options' => [
            'class' => 'navbar-nav navbar-right',
            'id' => 'navbar',
        ],
        'items' => [
            [
              'label' => \Yii::$app->user->identity->username, 
              'url' => ['#'],
              'items' => 
                [
                    ['label' => 'Support', 'url' =>'#access'],
                    ['label' => 'Dashboard', 'url' => '#'],
                    '<li class="divider"></li>',
                    ['label' => 'Logout',  'url' => '#'],
                ],
            ],
        ],
    ]);
    NavBar::end();
    ?>
   
    <div style="padding-top: 65px; padding-left: 20px; width: 98%;">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
