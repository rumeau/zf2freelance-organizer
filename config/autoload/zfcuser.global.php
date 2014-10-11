<?php
return [
    'zfcuser' => [
        'user_entity_class' => 'Application\Entity\User',
        'enable_default_entities' => false,
        'enable_registration' => false,
        'enable_username' => true,
        'auth_identity_fields' => array( 'username' ),
        'use_redirect_parameter_if_present' => true,
        'login_redirect_route' => 'home',
        'logout_redirect_route' => 'zfcuser/login',
        'enable_user_state' => true,
        'default_user_state' => 1,
        'allowed_login_states' => array( null, 1 ),
    ],
];
