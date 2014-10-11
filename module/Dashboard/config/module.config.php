<?php
return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        '__NAMESPACE__' => 'Dashboard\Controller',
                        'controller' => 'index',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Dashboard\Controller\Index' => 'Dashboard\Controller\IndexController',
        ],
    ],
];