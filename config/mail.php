<?php return [
    'class' => 'yii\swiftmailer\Mailer',
    'useFileTransport' => false,
    'view' => [
        'class'=>'app\components\web\ViewMail'
    ],
    'viewPath' => '@app/views/mail',
    'transport' => [],
];
