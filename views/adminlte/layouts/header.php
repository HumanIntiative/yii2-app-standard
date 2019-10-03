<?php

use app\models\Company;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$companyId = Yii::$app->user->identity->company_id;
$logoMini = Html::tag('span', 'App', ['class'=>'logo-mini']);
$logoLg = Html::tag('span', Yii::$app->name, ['class'=>'logo-lg']); ?>

<header class="main-header">
    <?= Html::a($logoMini . $logoLg, Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <?= \app\widgets\menu\MessageMenu::widget(['asset'=>$directoryAsset]) ?>
                </li>
                <li class="dropdown notifications-menu">
                    <?= \app\widgets\menu\NotificationMenu::widget() ?>
                </li>

                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <?= \app\widgets\menu\TaskMenu::widget() ?>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <?= \app\widgets\menu\UserMenu::widget(['asset'=>$directoryAsset]) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
