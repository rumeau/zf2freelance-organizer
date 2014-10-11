<?php
return [
    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                ['controller' => 'zfcuser', 'roles' => ['guest', 'user']],
                ['controller' => 'goalioforgotpassword_forgot', 'roles' => ['guest']],
            ],
            'BjyAuthorize\Guard\Route' => [
                ['route' => 'zfcuser', 'roles' => ['guest']],
                ['route' => 'zfcuser/logout', 'roles' => ['user']],
                ['route' => 'zfcuser/login', 'roles' => ['guest', 'user']],
                ['route' => 'zfcuser/register', 'roles' => ['guest']],
                ['route' => 'zfcuser/forgotpassword', 'roles' => ['guest']],
                ['route' => 'zfcuser/resetpassword', 'roles' => ['guest']],
            ],
        ],
    ],
];