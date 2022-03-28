<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\BaseController::pageAccueil'], null, null, null, false, false, null]],
        '/presentationSI' => [[['_route' => 'presentationSI', '_controller' => 'App\\Controller\\BaseController::presentationSI'], null, null, null, false, false, null]],
        '/gestionSI' => [[['_route' => 'gestionSI', '_controller' => 'App\\Controller\\BaseController::gestionSI'], null, null, null, false, false, null]],
        '/equipment' => [[['_route' => 'equipment', '_controller' => 'App\\Controller\\BaseController::equipment'], null, null, null, false, false, null]],
        '/repartition' => [[['_route' => 'repartition', '_controller' => 'App\\Controller\\BaseController::repartition'], null, null, null, false, false, null]],
        '/segmentation' => [[['_route' => 'segmentation', '_controller' => 'App\\Controller\\BaseController::segmentation'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\BaseController::users'], null, null, null, false, false, null]],
        '/cadurcien' => [[['_route' => 'cadurcien', '_controller' => 'App\\Controller\\BaseController::listeCadurciens'], null, null, null, false, false, null]],
        '/ayantFrais' => [[['_route' => 'ayantFrais', '_controller' => 'App\\Controller\\BaseController::ayantFrais'], null, null, null, false, false, null]],
        '/nayantPasFrais' => [[['_route' => 'nayantPasFrais', '_controller' => 'App\\Controller\\BaseController::nayantPasFrais'], null, null, null, false, false, null]],
        '/nbfrais' => [[['_route' => 'nbfrais', '_controller' => 'App\\Controller\\BaseController::nbFrais'], null, null, null, false, false, null]],
        '/domaine' => [[['_route' => 'domaine', '_controller' => 'App\\Controller\\BaseController::domaine'], null, null, null, false, false, null]],
        '/utiliConcerne' => [[['_route' => 'utiliConcerne', '_controller' => 'App\\Controller\\BaseController::utiliConcerne'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat/new' => [[['_route' => 'etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/etat/([^/]++)(?'
                    .'|(*:185)'
                    .'|/edit(*:198)'
                    .'|(*:206)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [
            [['_route' => 'etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
