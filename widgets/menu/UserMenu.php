<?php

namespace app\widgets\menu;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class UserMenu extends Widget
{
    public $asset;

    protected $photoUrl;
    protected $user;

    public function init()
    {
        parent::init();
        $this->photoUrl = '//intranet.pkpu.or.id/dev/photo/';
        $this->user = \Yii::$app->user;
    }

    public function run()
    {
        ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= $this->photoUrl ?>/<?= $this->user->id ?>.jpg" class="user-image" alt="User Image"/>
            <span class="hidden-xs"><?= !$this->user->isGuest ? $this->user->identity->full_name : "Guest" ?></span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="<?= $this->photoUrl ?><?= $this->user->id ?>.jpg" class="img-circle" alt="User Image"/>
                <p>
                    <?= !$this->user->isGuest ? $this->user->identity->full_name : "Guest" ?>
                    <small><?= $this->user->identity->position_detail ?></small>
                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <?php $url = sprintf(
                        'http://hrm.%s/index.php?r=myInfo/view&id=%s',
                        getenv('DOMAIN_URL'),
                        $this->user->id
                    ) ?>
                    <?= Html::a('Profile', $url, ['class'=>'btn btn-default btn-flat']) ?>
                </div>
                <div class="pull-right">
                    <form method="post" action="<?= Url::to(['/site/logout']) ?>" class="inline">
                        <?= Html::button('Sign out', [
                            'class' => 'btn btn-default btn-flat',
                            'type' => 'submit',
                            'data-method' => 'post',
                            'data-request-method' => 'post',
                        ]) ?>
                    </form>
                </div>
            </li>
        </ul>
        <?php
    }
}
