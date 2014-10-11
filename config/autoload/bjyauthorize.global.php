<?php

return [
    'doctrine' => array(
        'driver' => array(
            // overriding zfc-user-doctrine-orm's config
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => 'module/Application/src/Application/Entity',
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ZfcUser\Entity' => 'zfcuser_entity',
                ),
            ),
        ),
    ),

    'bjyauthorize' => [
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',
        'default_role' => 'guest',
        'unauthorized_strategy' => 'BjyAuthorize\View\RedirectionStrategy',

        'role_providers' => [

            /* here, 'guest' and 'user are defined as top-level roles, with
             * 'admin' inheriting from user
             */
            'BjyAuthorize\Provider\Role\Config' => [
                'guest' => [],
                'user'  => [],
            ],

            // this will load roles from
            // the 'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' service
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => [
                // class name of the entity representing the role
                'role_entity_class' => 'Application\Entity\Role',
                // service name of the object manager
                'object_manager'    => 'doctrine.entitymanager.orm_default',
            ],
        ],

        // resource providers provide a list of resources that will be tracked
        // in the ACL. like roles, they can be hierarchical
        'resource_providers' => [
            'BjyAuthorize\Provider\Resource\Config' => [],
        ],
    ],
];
