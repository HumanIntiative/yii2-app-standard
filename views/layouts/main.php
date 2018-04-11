<?php

use yii\helpers\Html;
use dmstr\web\AdminLteAsset;
use app\assets\AppAsset;
use app\models\Company;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
AdminLteAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
$companyId = Yii::$app->user->identity->company_id; ?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(strip_tags($this->title)) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition <?= Company::GetSkinTheme($companyId); ?> sidebar-mini sidebar-collapse">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <?= $this->render('header.php', ['directoryAsset' => $directoryAsset]) ?>
            <?= $this->render('left.php', ['directoryAsset' => $directoryAsset]) ?>
            <?= $this->render('content.php', ['content' => $content, 'directoryAsset' => $directoryAsset]) ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>