<?php

/**
 * Application routes.
 */
return [
    '' => [
        'controller' => 'SiteController',
        'action'     => 'home',
    ],
    'about' => [
        'controller' => 'SiteController',
        'action'     => 'about',
    ],
    'contact' => [
        'controller' => 'SiteController',
        'action'     => 'contact',
    ],
    'login' => [
        'controller' => 'AuthController',
        'action'     => 'login',
    ],
    'signup' => [
        'controller' => 'AuthController',
        'action'     => 'signup',
    ],
];