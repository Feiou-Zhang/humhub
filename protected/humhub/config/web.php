<?php

$config = [
    'id' => 'humhub',
    'bootstrap' => ['humhub\components\bootstrap\LanguageSelector'],
    'defaultRoute' => '/dashboard/dashboard',
    'layoutPath' => '@humhub/views/layouts',
    'components' => [
        'request' => [
            'class' => 'humhub\components\Request',
            'cookieValidationKey' => 'asdf',
        ],
        'user' => [
            'class' => 'humhub\modules\user\components\User',
            'identityClass' => 'humhub\modules\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/user/auth/login']
        ],
        'errorHandler' => [
        //'errorAction' => 'error/index',
        ],
        'session' => [
            'class' => 'humhub\modules\user\components\Session',
            'sessionTable' => 'user_http_session',
        ],
    ],
    'modules' => [],
];

return $config;