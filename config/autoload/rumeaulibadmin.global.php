<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 09/10/2014
 * Time: 16:46
 */
return [
    'rumeaulib_admin' => [
        'override_layout' => true,
        'admin_layout'    => 'layout/admin',
    ],

    /**
     * Overrides configuration on RumeauLibAppConfig Module
     * set rumeaulib_admin to null to disable
     */
    'rumeaulib_appconfig' => [
        'forms' => [
            'rumeaulib_admin' => 'RumeauLibAdmin\Form\AppConfig\Config',
        ],
    ],

    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                ['controller' => 'RumeauLibAdmin\Controller\Admin', 'roles' => ['guest']],
            ],
            'BjyAuthorize\Guard\Route' => [
                ['route' => 'admin', 'roles' => ['guest']],
            ],
        ],
    ],
];
