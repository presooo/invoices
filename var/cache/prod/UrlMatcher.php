<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\UserController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/user/login' => [[['_route' => 'user_login', '_controller' => 'App\\Controller\\UserController::loginAction'], null, ['GET' => 0], null, false, false, null]],
        '/user/get' => [[['_route' => 'user_get_user', '_controller' => 'App\\Controller\\UserController::getAction'], null, ['GET' => 0], null, false, false, null]],
        '/user/get-all' => [[['_route' => 'user_get_all', '_controller' => 'App\\Controller\\UserController::getAllAction'], null, ['GET' => 0], null, false, false, null]],
        '/user/delete' => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::deleteAction'], null, ['DELETE' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
