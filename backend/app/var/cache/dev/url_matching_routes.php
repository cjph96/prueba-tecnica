<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/process' => [
            [['_route' => 'app_addprocess__invoke', '_controller' => 'App\\Controller\\AddProcessController'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_getallprocess__invoke', '_controller' => 'App\\Controller\\GetAllProcessController'], null, ['GET' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'app_defaultcontrolller_default', '_controller' => 'App\\Controller\\DefaultControlller::default'], null, null, null, false, false, null]],
        '/api/process_old' => [
            [['_route' => 'app_process_all', '_controller' => 'App\\Controller\\ProcessController::all'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_process_add', '_controller' => 'App\\Controller\\ProcessController::add'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/process_old/([^/]++)/(?'
                    .'|finished(*:44)'
                    .'|start(*:56)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:92)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'app_process_finished', '_controller' => 'App\\Controller\\ProcessController::finished'], ['id_process'], ['POST' => 0], null, false, false, null]],
        56 => [[['_route' => 'app_process_start', '_controller' => 'App\\Controller\\ProcessController::start'], ['id_process'], ['POST' => 0], null, false, false, null]],
        92 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
