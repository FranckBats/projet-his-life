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
        '/enfant/profil' => [[['_route' => 'child_profile', '_controller' => 'App\\Controller\\ChildController::profile'], null, null, null, false, false, null]],
        '/enfant/ajout' => [[['_route' => 'child_create', '_controller' => 'App\\Controller\\ChildController::create'], null, null, null, false, false, null]],
        '/repertoire' => [[['_route' => 'contact_browse', '_controller' => 'App\\Controller\\ContactController::browse'], null, null, null, false, false, null]],
        '/repertoire/ajouter-contact' => [[['_route' => 'contact_add', '_controller' => 'App\\Controller\\ContactController::add'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/ajout' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/famille/profil' => [[['_route' => 'family_profile', '_controller' => 'App\\Controller\\FamilyController::profile'], null, null, null, false, false, null]],
        '/famille/ajouter' => [[['_route' => 'family_create', '_controller' => 'App\\Controller\\FamilyController::create'], null, null, null, false, false, null]],
        '/bulletins/index' => [[['_route' => 'grade_browse', '_controller' => 'App\\Controller\\GradeController::browse'], null, null, null, false, false, null]],
        '/bulletins/ajouter' => [[['_route' => 'grade_add', '_controller' => 'App\\Controller\\GradeController::add'], null, null, null, false, false, null]],
        '/sante' => [[['_route' => 'healthbook_browse', '_controller' => 'App\\Controller\\HealthbookController::browse'], null, null, null, false, false, null]],
        '/sante/ajouter' => [[['_route' => 'healthbook_add', '_controller' => 'App\\Controller\\HealthbookController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/notre-equipe' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MainController::about'], null, null, null, false, false, null]],
        '/nous-contacter' => [[['_route' => 'contact_us', '_controller' => 'App\\Controller\\MainController::contactUs'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'mentions_legales', '_controller' => 'App\\Controller\\MainController::mentionsLegales'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\MainController::cgu'], null, null, null, false, false, null]],
        '/tableaudebord' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\MainController::dashboard'], null, null, null, false, false, null]],
        '/tableaudebord/notre-equipe' => [[['_route' => 'dashboard_about', '_controller' => 'App\\Controller\\MainController::aboutDashboard'], null, null, null, false, false, null]],
        '/tableaudebord/nous-contacter' => [[['_route' => 'dashboard_contact_us', '_controller' => 'App\\Controller\\MainController::contactUsDashboard'], null, null, null, false, false, null]],
        '/tableaudebord/mentions-legales' => [[['_route' => 'dashboard_mentions_legales', '_controller' => 'App\\Controller\\MainController::mentionsLegalesDashboard'], null, null, null, false, false, null]],
        '/tableaudebord/cgu' => [[['_route' => 'dashboard_cgu', '_controller' => 'App\\Controller\\MainController::cguDashboard'], null, null, null, false, false, null]],
        '/ajax' => [[['_route' => 'ajax_action', '_controller' => 'App\\Controller\\MainController::ajaxAction'], null, null, null, false, false, null]],
        '/mots-des-profs' => [[['_route' => 'note_browse', '_controller' => 'App\\Controller\\NoteController::browse'], null, null, null, false, false, null]],
        '/mots-des-profs/ajouter' => [[['_route' => 'note_add', '_controller' => 'App\\Controller\\NoteController::add'], null, null, null, false, false, null]],
        '/mon-profil/details' => [[['_route' => 'people_profile', '_controller' => 'App\\Controller\\PeopleController::profile'], null, null, null, false, false, null]],
        '/mon-profil' => [[['_route' => 'people_edit', '_controller' => 'App\\Controller\\PeopleController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/galerie' => [[['_route' => 'picture', '_controller' => 'App\\Controller\\PictureController::browse'], null, null, null, false, false, null]],
        '/galerie/ajouter' => [[['_route' => 'picture_add', '_controller' => 'App\\Controller\\PictureController::add'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'post_browse', '_controller' => 'App\\Controller\\PostController::browse'], null, null, null, false, false, null]],
        '/message/ajouter' => [[['_route' => 'post_add', '_controller' => 'App\\Controller\\PostController::add'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController:loadAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/e(?'
                    .'|nfant/(?'
                        .'|profil/(\\d+)(*:195)'
                        .'|(\\d+)(?'
                            .'|(*:211)'
                        .')'
                    .')'
                    .'|venement/(?'
                        .'|details/(\\d+)(*:246)'
                        .'|(\\d+)(?'
                            .'|(*:262)'
                        .')'
                    .')'
                .')'
                .'|/repertoire/(\\d+)(?'
                    .'|(*:293)'
                .')'
                .'|/famille/(?'
                    .'|profil/(\\d+)(*:326)'
                    .'|(\\d+)(?'
                        .'|(*:342)'
                    .')'
                .')'
                .'|/bulletins/(?'
                    .'|details/(\\d+)(*:379)'
                    .'|(\\d+)(?'
                        .'|(*:395)'
                    .')'
                .')'
                .'|/sante/(?'
                    .'|details/(\\d+)(*:428)'
                    .'|(\\d+)(?'
                        .'|(*:444)'
                    .')'
                .')'
                .'|/m(?'
                    .'|o(?'
                        .'|ts\\-des\\-profs/(?'
                            .'|details/(\\d+)(*:494)'
                            .'|(\\d+)(?'
                                .'|(*:510)'
                            .')'
                        .')'
                        .'|n\\-profil/(\\d+)(*:535)'
                    .')'
                    .'|essage(?'
                        .'|s/voir/(\\d+)(*:565)'
                        .'|/(\\d+)(?'
                            .'|(*:582)'
                        .')'
                    .')'
                .')'
                .'|/galerie/(?'
                    .'|details/(\\d+)(*:618)'
                    .'|(\\d+)(?'
                        .'|(*:634)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'child_read', '_controller' => 'App\\Controller\\ChildController::read'], ['id'], null, null, false, true, null]],
        211 => [
            [['_route' => 'child_delete', '_controller' => 'App\\Controller\\ChildController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'child_edit', '_controller' => 'App\\Controller\\ChildController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
        ],
        246 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        262 => [
            [['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        293 => [
            [['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        326 => [[['_route' => 'family_read', '_controller' => 'App\\Controller\\FamilyController::read'], ['id'], null, null, false, true, null]],
        342 => [
            [['_route' => 'family_delete', '_controller' => 'App\\Controller\\FamilyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'family_edit', '_controller' => 'App\\Controller\\FamilyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
        ],
        379 => [[['_route' => 'grade_read', '_controller' => 'App\\Controller\\GradeController::read'], ['id'], null, null, false, true, null]],
        395 => [
            [['_route' => 'grade_edit', '_controller' => 'App\\Controller\\GradeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'grade_delete', '_controller' => 'App\\Controller\\GradeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        428 => [[['_route' => 'healthbook_read', '_controller' => 'App\\Controller\\HealthbookController::read'], ['id'], null, null, false, true, null]],
        444 => [
            [['_route' => 'healthbook_delete', '_controller' => 'App\\Controller\\HealthbookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'healthbook_edit', '_controller' => 'App\\Controller\\HealthbookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
        ],
        494 => [[['_route' => 'note_read', '_controller' => 'App\\Controller\\NoteController::read'], ['id'], null, null, false, true, null]],
        510 => [
            [['_route' => 'note_edit', '_controller' => 'App\\Controller\\NoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'note_delete', '_controller' => 'App\\Controller\\NoteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        535 => [[['_route' => 'people_delete', '_controller' => 'App\\Controller\\PeopleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        565 => [[['_route' => 'post_read', '_controller' => 'App\\Controller\\PostController::read'], ['id'], null, null, false, true, null]],
        582 => [
            [['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        618 => [[['_route' => 'picture_read', '_controller' => 'App\\Controller\\PictureController::read'], ['id'], null, null, false, true, null]],
        634 => [
            [['_route' => 'picture_edit', '_controller' => 'App\\Controller\\PictureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'picture_delete', '_controller' => 'App\\Controller\\PictureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
