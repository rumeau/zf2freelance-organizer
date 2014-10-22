<?php
return [
    'navigation' => [
        'admin' => [
            'users' => [
                'label' => 'Users',
                'route' => 'admin/users',
                'icon' => 'fa fa-users',
                'visible' => true,
                'pages' => [
                    [
                        'label' => 'Add User',
                        'route' => 'admin/users',
                        'action' => 'create',
                        'visible' => false,
                    ],
                    [
                        'label' => 'Edit User',
                        'route' => 'admin/users',
                        'action' => 'edit',
                        'visible' => false,
                    ],
                    [
                        'label' => 'Delete User',
                        'route' => 'admin/users',
                        'action' => 'delete',
                        'visible' => false,
                    ],
                ],
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'admin' => [
                'child_routes' => [
                    'users' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/users[/[:action]]',
                            'defaults' => [
                                '__NAMESPACE__' => 'User\Controller',
                                'controller' => 'admin',
                                'action' => 'index',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [
            'User\Controller\Admin' => 'User\Controller\AdminController',
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                [
                    'controller' => 'User\Controller\Admin', 'roles' => ['guest']
                ],
            ],
            'BjyAuthorize\Guard\Route' => [
                [
                    'route' => 'admin/users',
                    'roles' => ['guest'],
                ],
            ],
        ],
    ],
];