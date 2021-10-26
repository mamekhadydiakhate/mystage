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
        '/activite' => [
            [['_route' => 'activites', '_controller' => 'App\\Controller\\ActiviteController::addActivite'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'activite', '_controller' => 'App\\Controller\\ActiviteController::listActivite'], null, ['GET' => 0], null, false, false, null],
        ],
        '/rechercheactivite' => [[['_route' => 'app_activite_rechercheractivite', '_controller' => 'App\\Controller\\ActiviteController::rechercherActivite'], null, ['GET' => 0], null, false, false, null]],
        '/autorite' => [
            [['_route' => 'autorites', '_controller' => 'App\\Controller\\AutoriteController::addAutorite'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'autorite', '_controller' => 'App\\Controller\\AutoriteController::listAutorite'], null, ['GET' => 0], null, false, false, null],
        ],
        '/rechercheautorite' => [[['_route' => 'app_autorite_rechercherautorite', '_controller' => 'App\\Controller\\AutoriteController::rechercherAutorite'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire' => [
            [['_route' => 'commentaires', '_controller' => 'App\\Controller\\CommentaireController::addCommentaire'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'commentaire', '_controller' => 'App\\Controller\\CommentaireController::listCommentaire'], null, ['GET' => 0], null, false, false, null],
        ],
        '/difficulte' => [
            [['_route' => 'difficultes', '_controller' => 'App\\Controller\\DifficulteController::addDifficulte'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'difficulte', '_controller' => 'App\\Controller\\DifficulteController::listDifficulte'], null, ['GET' => 0], null, false, false, null],
        ],
        '/evenement' => [
            [['_route' => 'evenements', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::listEvenement'], null, ['GET' => 0], null, false, false, null],
        ],
        '/rechercheevenement' => [[['_route' => 'app_evenement_rechercherevenement', '_controller' => 'App\\Controller\\EvenementController::recherchErevenement'], null, ['GET' => 0], null, false, false, null]],
        '/extraction' => [[['_route' => 'extraction', '_controller' => 'App\\Controller\\ExtractionController::index'], null, null, null, false, false, null]],
        '/historiques' => [[['_route' => 'app_historique_getallhistoriques', '_controller' => 'App\\Controller\\HistoriqueController::getAllHistoriques'], null, ['GET' => 0], null, false, false, null]],
        '/historique/evenement' => [[['_route' => 'historique_evenement', '_controller' => 'App\\Controller\\HistoriqueEvenementController::index'], null, null, null, false, false, null]],
        '/addInterim' => [[['_route' => 'interims', '_controller' => 'App\\Controller\\InterimController::addInterim'], null, ['POST' => 0], null, false, false, null]],
        '/interim' => [[['_route' => 'interim', '_controller' => 'App\\Controller\\InterimController::listInterim'], null, ['GET' => 0], null, false, false, null]],
        '/periodicite' => [
            [['_route' => 'periodicites', '_controller' => 'App\\Controller\\PeriodiciteController::addPeriodicite'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'periodicite', '_controller' => 'App\\Controller\\PeriodiciteController::listPeriodicite'], null, ['GET' => 0], null, false, false, null],
        ],
        '/rechercheperiodicite' => [[['_route' => 'app_periodicite_rechercherperiodicite', '_controller' => 'App\\Controller\\PeriodiciteController::rechercherPeriodicite'], null, ['GET' => 0], null, false, false, null]],
        '/pointDeCoordination' => [[['_route' => 'pointDeCoordinations', '_controller' => 'App\\Controller\\PointDeCoordinationController::addPointDeCoordination'], null, ['POST' => 0], null, false, false, null]],
        '/pointdecoordination' => [[['_route' => 'pointDeCoordination', '_controller' => 'App\\Controller\\PointDeCoordinationController::listPointDeCoordination'], null, ['GET' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil_ajouterprofil', '_controller' => 'App\\Controller\\ProfilController::ajouterProfil'], null, ['POST' => 0], null, false, false, null]],
        '/profils' => [[['_route' => 'app_profil_listprofil', '_controller' => 'App\\Controller\\ProfilController::listProfil'], null, ['GET' => 0], null, false, false, null]],
        '/reinitialisationMotDePass' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/structure' => [
            [['_route' => 'structures', '_controller' => 'App\\Controller\\StructureController::addStructure'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'structure', '_controller' => 'App\\Controller\\StructureController::listStructure'], null, ['GET' => 0], null, false, false, null],
        ],
        '/trancheHoraire' => [
            [['_route' => 'trancheHoraires', '_controller' => 'App\\Controller\\TrancheHoraireController::addTrancheHoraire'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'trancheHoraire', '_controller' => 'App\\Controller\\TrancheHoraireController::listtrancheHoraire'], null, ['GET' => 0], null, false, false, null],
        ],
        '/type/periodicite' => [[['_route' => 'type_periodicite', '_controller' => 'App\\Controller\\TypePeriodiciteController::index'], null, null, null, false, false, null]],
        '/typeService' => [
            [['_route' => 'typeService', '_controller' => 'App\\Controller\\TypeServiceController::addTypeService'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'typeServices', '_controller' => 'App\\Controller\\TypeServiceController::listTypeService'], null, ['GET' => 0], null, false, false, null],
        ],
        '/recherchetypeService' => [[['_route' => 'app_typeservice_recherchertypeservice', '_controller' => 'App\\Controller\\TypeServiceController::rechercherTypeService'], null, ['GET' => 0], null, false, false, null]],
        '/type/structure' => [[['_route' => 'type_structure', '_controller' => 'App\\Controller\\TypeStructureController::index'], null, null, null, false, false, null]],
        '/passwordChange' => [[['_route' => 'app_user_passwordchange', '_controller' => 'App\\Controller\\UserController::passwordChange'], null, ['POST' => 0], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_user_deconnexion', '_controller' => 'App\\Controller\\UserController::deconnexion'], null, ['GET' => 0], null, false, false, null]],
        '/addUser' => [[['_route' => 'app_user_adduser', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_listusers', '_controller' => 'App\\Controller\\UserController::listUsers'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_user_searchuser', '_controller' => 'App\\Controller\\UserController::searchUser'], null, ['GET' => 0], null, false, false, null]],
        '/listEmails' => [[['_route' => 'app_user_listemails', '_controller' => 'App\\Controller\\UserController::listEmails'], null, ['GET' => 0], null, false, false, null]],
        '/workflow' => [[['_route' => 'app_workflow_sendworkflow', '_controller' => 'App\\Controller\\WorkflowController::sendworkflow'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|ctivite/([^/]++)(?'
                        .'|(*:193)'
                    .')'
                    .'|utorite/([^/]++)(?'
                        .'|(*:221)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:263)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:294)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:330)'
                        .')'
                    .')'
                .')'
                .'|/commentaire/([^/]++)(?'
                    .'|(*:365)'
                .')'
                .'|/d(?'
                    .'|elete\\-(?'
                        .'|commentaire/([^/]++)(*:409)'
                        .'|difficulte/([^/]++)(*:436)'
                        .'|pointDeCoordination/([^/]++)(*:472)'
                        .'|structure/([^/]++)(*:498)'
                        .'|trancheHoraire/([^/]++)(*:529)'
                    .')'
                    .'|ifficulte/([^/]++)(?'
                        .'|(*:559)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:591)'
                .')'
                .'|/user(?'
                    .'|historique/([^/]++)(*:627)'
                    .'|/([^/]++)(?'
                        .'|(*:647)'
                    .')'
                .')'
                .'|/historiquesDates/([^/]++)(*:683)'
                .'|/interim/([^/]++)(?'
                    .'|(*:711)'
                .')'
                .'|/p(?'
                    .'|eriodicite/([^/]++)(?'
                        .'|(*:747)'
                    .')'
                    .'|ointdecoordination/([^/]++)(*:783)'
                    .'|rofil/([^/]++)(?'
                        .'|(*:808)'
                    .')'
                .')'
                .'|/PointDeCoordination/([^/]++)(*:847)'
                .'|/re(?'
                    .'|set(?'
                        .'|(?:/([^/]++))?(*:881)'
                        .'|ting/reset/([^/]++)(*:908)'
                    .')'
                    .'|gister/confirm/([^/]++)(*:940)'
                .')'
                .'|/structure/([^/]++)(?'
                    .'|(*:971)'
                .')'
                .'|/t(?'
                    .'|rancheHoraire/([^/]++)(?'
                        .'|(*:1010)'
                    .')'
                    .'|ypeService/([^/]++)(?'
                        .'|(*:1042)'
                    .')'
                .')'
                .'|/blockUser/([^/]++)(*:1072)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [
            [['_route' => 'app_activite_detailsactivite', '_controller' => 'App\\Controller\\ActiviteController::detailsactivite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_activite', '_controller' => 'App\\Controller\\ActiviteController::deleteactivite'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_activite_modifiactivite', '_controller' => 'App\\Controller\\ActiviteController::modifiActivite'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        221 => [
            [['_route' => 'app_autorite_detailsautorite', '_controller' => 'App\\Controller\\AutoriteController::detailsAutorite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_autorite', '_controller' => 'App\\Controller\\AutoriteController::deleteAutorite'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_autorite_modifiautorite', '_controller' => 'App\\Controller\\AutoriteController::modifiAutorite'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        263 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        294 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        330 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        365 => [
            [['_route' => 'app_commentaire_detailscommentaire', '_controller' => 'App\\Controller\\CommentaireController::detailsCommentaire'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentaire_modificommentaire', '_controller' => 'App\\Controller\\CommentaireController::modifiCommentaire'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        409 => [[['_route' => 'delete_commentaire', '_controller' => 'App\\Controller\\CommentaireController::deleteCommentaire'], ['id'], ['DELETE' => 0], null, false, true, null]],
        436 => [[['_route' => 'delete_difficulte', '_controller' => 'App\\Controller\\DifficulteController::deleteDifficulte'], ['id'], ['DELETE' => 0], null, false, true, null]],
        472 => [[['_route' => 'delete_pointDeCoordination', '_controller' => 'App\\Controller\\PointDeCoordinationController::deletePointDeCoordination'], ['id'], ['DELETE' => 0], null, false, true, null]],
        498 => [[['_route' => 'delete_structure', '_controller' => 'App\\Controller\\StructureController::deleteStructure'], ['id'], ['DELETE' => 0], null, false, true, null]],
        529 => [[['_route' => 'delete_trancheHoraire', '_controller' => 'App\\Controller\\TrancheHoraireController::deletetrancheHoraire'], ['id'], ['DELETE' => 0], null, false, true, null]],
        559 => [
            [['_route' => 'app_difficulte_detailsdifficulte', '_controller' => 'App\\Controller\\DifficulteController::detailsDifficulte'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_difficulte_modifidifficulte', '_controller' => 'App\\Controller\\DifficulteController::modifiDifficulte'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        591 => [
            [['_route' => 'app_evenement_detailsevenement', '_controller' => 'App\\Controller\\EvenementController::detailsEvenement'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_evenement', '_controller' => 'App\\Controller\\EvenementController::deleteEvenement'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_evenement_modifievenement', '_controller' => 'App\\Controller\\EvenementController::modifiEvenement'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        627 => [[['_route' => 'app_historique_getuserhistoriques', '_controller' => 'App\\Controller\\HistoriqueController::getUserHistoriques'], ['id'], ['GET' => 0], null, false, true, null]],
        647 => [
            [['_route' => 'app_user_detailsuser', '_controller' => 'App\\Controller\\UserController::detailsUser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_modifierutilisateur', '_controller' => 'App\\Controller\\UserController::modifierUtilisateur'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        683 => [[['_route' => 'app_historique_gethistoriquesentre', '_controller' => 'App\\Controller\\HistoriqueController::gethistoriquesEntre'], ['id'], ['POST' => 0], null, false, true, null]],
        711 => [
            [['_route' => 'app_interim_detailsinterim', '_controller' => 'App\\Controller\\InterimController::detailsInterim'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_interim', '_controller' => 'App\\Controller\\InterimController::deleteInterim'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_interim_modifiinterim', '_controller' => 'App\\Controller\\InterimController::modifiInterim'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        747 => [
            [['_route' => 'app_periodicite_detailsperiodicite', '_controller' => 'App\\Controller\\PeriodiciteController::detailsPeriodicite'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_periodicite', '_controller' => 'App\\Controller\\PeriodiciteController::deletePeriodicite'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_periodicite_modifiperiodicite', '_controller' => 'App\\Controller\\PeriodiciteController::modifiPeriodicite'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        783 => [[['_route' => 'modifie_pointDeCoordination', '_controller' => 'App\\Controller\\PointDeCoordinationController::modifiPointDeCoordination'], ['id'], ['PUT' => 0], null, false, true, null]],
        808 => [
            [['_route' => 'app_profil_deleteprofil', '_controller' => 'App\\Controller\\ProfilController::deleteProfil'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_profil_modifierprofil', '_controller' => 'App\\Controller\\ProfilController::modifierProfil'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        847 => [[['_route' => 'app_pointdecoordination_detailspointdecoordination', '_controller' => 'App\\Controller\\PointDeCoordinationController::detailsPointDeCoordination'], ['id'], ['GET' => 0], null, false, true, null]],
        881 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], ['POST' => 0], null, false, true, null]],
        908 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        940 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        971 => [
            [['_route' => 'app_structure_detailsstructure', '_controller' => 'App\\Controller\\StructureController::detailsStructure'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_structure_modifistructure', '_controller' => 'App\\Controller\\StructureController::modifiStructure'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1010 => [
            [['_route' => 'app_tranchehoraire_detailstranchehoraire', '_controller' => 'App\\Controller\\TrancheHoraireController::detailstrancheHoraire'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'modifie_trancheHoraire', '_controller' => 'App\\Controller\\TrancheHoraireController::modifitrancheHoraire'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1042 => [
            [['_route' => 'app_typeservice_detailstypeservice', '_controller' => 'App\\Controller\\TypeServiceController::detailsTypeService'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_typeService', '_controller' => 'App\\Controller\\TypeServiceController::deleteTypeService'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_typeservice_modifitypeservice', '_controller' => 'App\\Controller\\TypeServiceController::modifiTypeService'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1072 => [
            [['_route' => 'app_user_bloquerutilisateur', '_controller' => 'App\\Controller\\UserController::bloquerUtilisateur'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
