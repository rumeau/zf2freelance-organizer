<?php
return [
    'navigation' => [
        'admin' => [
            'clients' => [
                'label' => 'Clients',
                'route' => 'admin/clients',
                'icon' => 'fa fa-briefcase',
                'pages' => [
                    [
                        'label' => 'Add Client',
                        'route' => 'admin/clients',
                        'action' => 'create',
                        'visible' => false,
                    ],
                    [
                        'label' => 'Edit Client',
                        'route' => 'admin/clients',
                        'action' => 'edit',
                        'visible' => false,
                    ],
                    [
                        'label' => 'Delete Client',
                        'route' => 'admin/clients',
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
                    'clients' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/clients[/[:action]]',
                            'defaults' => [
                                '__NAMESPACE__' => 'Client\Controller',
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
            'Client\Controller\Admin' => 'Client\Controller\AdminController',
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
                    'controller' => 'Client\Controller\Admin', 'roles' => ['guest']
                ],
            ],
            'BjyAuthorize\Guard\Route' => [
                [
                    'route' => 'admin/clients',
                    'roles' => ['guest'],
                ],
            ],
        ],
    ],
];