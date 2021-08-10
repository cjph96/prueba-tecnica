<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_defaultcontrolller_default', '_controller' => 'App\\Controller\\DefaultControlller::default'], null, null, null, false, false, null]],
        '/api/process' => [
            [['_route' => 'app_process_all', '_controller' => 'App\\Controller\\ProcessController::all'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_process_add', '_controller' => 'App\\Controller\\ProcessController::add'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
