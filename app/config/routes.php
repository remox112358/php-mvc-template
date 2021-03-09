<?php

/**
 * Application routes.
 */
return [
    '/' => [
        'controller' => 'ArticleController',
        'action'     => 'index',
    ],

    '/login' => [
        'controller' => 'AuthController',
        'action'     => 'login',
    ],
    '/signup' => [
        'controller' => 'AuthController',
        'action'     => 'signup',
    ],
];