<?php
return [
    'navigation' => [
        'admin' => [
            'home' => [
                'label' => 'Dashboard',
                'route' => 'home',
                'icon' => 'fa fa-dashboard fa-fw',
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'admin' => [
                'child_routes' => [
                    'globalsettings' => [
                        'type' => 'Literal',
                        'options' => [
                            'route'    => '/global-settings',
                            'defaults' => [
                                '__NAMESPACE__' => 'Admin\Controller',
                                'controller' => 'global-settings',
                                'action'     => 'index',
                            ],
                        ],
                    ]
                ]
            ],
        ],
    ],

    'rumeaulib_appconfig' => [
        'forms' => [
            'rumeaulib_admin' => null,
            'global_settings' => 'Admin\Form\AppConfig\GlobalSettings',
        ],
    ],

    'service_manager' => [

    ],

    'controllers' => [
        'invokables' => [
            'Admin\Controller\GlobalSettings' => 'Admin\Controller\GlobalSettingsController',
        ],
    ],

    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                ['controller' => 'Admin\Controller\GlobalSettings', 'roles' => ['guest', 'user']],
            ],
            'BjyAuthorize\Guard\Route' => [
                ['route' => 'admin/globalsettings', 'roles' => ['guest']],
            ],
        ],
    ],
];