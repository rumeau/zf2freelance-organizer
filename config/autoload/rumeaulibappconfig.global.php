<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 09/10/2014
 * Time: 23:16
 */
return [
    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                ['controller' => 'RumeauLibAppConfig\Controller\Config', 'roles' => ['guest']],
            ],
            'BjyAuthorize\Guard\Route' => [
                ['route' => 'admin/config', 'roles' => ['guest']],
            ],
        ],
    ],
];
