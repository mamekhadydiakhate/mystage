<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/ajoutAgence' => [[['_route' => 'app_agence_ajoutagence', '_controller' => 'App\\Controller\\AgenceController::ajoutAgence'], null, ['POST' => 0], null, false, false, null]],
        '/listeAgence' => [[['_route' => 'app_agence_listeagence', '_controller' => 'App\\Controller\\AgenceController::listeAgence'], null, ['GET' => 0], null, false, false, null]],
        '/ajoutDemande' => [[['_route' => 'app_demande_ajoutdemande', '_controller' => 'App\\Controller\\DemandeController::ajoutDemande'], null, ['POST' => 0], null, false, false, null]],
        '/listeDemandes' => [[['_route' => 'app_demande_listedemande', '_controller' => 'App\\Controller\\DemandeController::listeDemande'], null, ['GET' => 0], null, false, false, null]],
        '/interimaire/create' => [[['_route' => 'app_interimaire_createinterimaire', '_controller' => 'App\\Controller\\InterimaireController::createInterimaire'], null, ['POST' => 0], null, false, false, null]],
        '/interimaires/dernierrecrues' => [[['_route' => 'app_interimaire_getallinterymairesbydernierrecrues', '_controller' => 'App\\Controller\\InterimaireController::getAllInterymairesByDernierRecrues'], null, ['GET' => 0], null, false, false, null]],
        '/interimaires/listeInterimParContrat' => [[['_route' => 'app_interimaire_listeinterimparcontrat', '_controller' => 'App\\Controller\\InterimaireController::listeInterimParContrat'], null, ['POST' => 0], null, false, false, null]],
        '/recherche' => [[['_route' => 'app_interimaire_rechercheavancee', '_controller' => 'App\\Controller\\InterimaireController::rechercheAvancee'], null, ['POST' => 0], null, false, false, null]],
        '/ajoutObjectif' => [[['_route' => 'app_objectif_ajoutobjectif', '_controller' => 'App\\Controller\\ObjectifController::ajoutObjectif'], null, ['POST' => 0], null, false, false, null]],
        '/profils' => [
            [['_route' => 'app_profil_addprofil', '_controller' => 'App\\Controller\\ProfilController::addProfil'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_profil_listprofil', '_controller' => 'App\\Controller\\ProfilController::listProfil'], null, ['GET' => 0], null, false, false, null],
        ],
        '/structure/create' => [[['_route' => 'app_structure_createstructure', '_controller' => 'App\\Controller\\StructureController::createStructure'], null, ['POST' => 0], null, false, false, null]],
        '/structure/all' => [[['_route' => 'app_structure_liststructure', '_controller' => 'App\\Controller\\StructureController::listStructure'], null, ['GET' => 0], null, false, false, null]],
        '/passwordChange' => [[['_route' => 'app_user_passwordchange', '_controller' => 'App\\Controller\\UserController::passwordChange'], null, ['POST' => 0], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_user_deconnexion', '_controller' => 'App\\Controller\\UserController::deconnexion'], null, ['GET' => 0], null, false, false, null]],
        '/users/create' => [[['_route' => 'app_user_adduser', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/users/all' => [[['_route' => 'app_user_getallusers', '_controller' => 'App\\Controller\\UserController::getAllUsers'], null, ['GET' => 0], null, false, false, null]],
        '/managers/list' => [[['_route' => 'app_user_listmanagers', '_controller' => 'App\\Controller\\UserController::listManagers'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/u(?'
                    .'|pdate(?'
                        .'|Agence/([^/]++)(*:35)'
                        .'|Demande/([^/]++)(*:58)'
                        .'|Objectif/([^/]++)(*:82)'
                    .')'
                    .'|sers/(?'
                        .'|updateInterimaire/([^/]++)(*:124)'
                        .'|([^/]++)(*:140)'
                        .'|update/([^/]++)(*:163)'
                        .'|activeDesactive/([^/]++)(*:195)'
                    .')'
                .')'
                .'|/d(?'
                    .'|e(?'
                        .'|tail(?'
                            .'|Agence/([^/]++)(*:236)'
                            .'|Demande/([^/]++)(*:260)'
                        .')'
                        .'|lete(?'
                            .'|Agence/([^/]++)(*:291)'
                            .'|Demande/([^/]++)(*:315)'
                            .'|Objectif/([^/]++)(*:340)'
                        .')'
                    .')'
                    .'|ocument/interimaire/([^/]++)(*:378)'
                .')'
                .'|/liste(?'
                    .'|Demandes/([^/]++)(*:413)'
                    .'|Objectifs/([^/]++)(*:439)'
                .')'
                .'|/interimaire(?'
                    .'|/([^/]++)(*:472)'
                    .'|s/(?'
                        .'|agence/([^/]++)(*:500)'
                        .'|manager/([^/]++)(*:524)'
                    .')'
                .')'
                .'|/contrat/interimaire/([^/]++)(*:563)'
                .'|/profils/(?'
                    .'|update/([^/]++)(*:598)'
                    .'|delete/([^/]++)(*:621)'
                .')'
                .'|/structure/(?'
                    .'|update/([^/]++)(*:659)'
                    .'|delete/([^/]++)(*:682)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:726)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:757)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:793)'
                        .'|historique_passes(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:839)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:877)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:918)'
                    .'|setting/reset/([^/]++)(*:948)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_agence_updateagence', '_controller' => 'App\\Controller\\AgenceController::updateAgence'], ['id'], ['POST' => 0], null, false, true, null]],
        58 => [[['_route' => 'app_demande_updatedemande', '_controller' => 'App\\Controller\\DemandeController::updateDemande'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_objectif_updateobjectif', '_controller' => 'App\\Controller\\ObjectifController::updateObjectif'], ['id'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_interimaire_updateinterimaire', '_controller' => 'App\\Controller\\InterimaireController::updateInterimaire'], ['id'], ['POST' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_user_getuserbyid', '_controller' => 'App\\Controller\\UserController::getUserById'], ['id'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_user_updateuser', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id'], ['POST' => 0], null, false, true, null]],
        195 => [[['_route' => 'app_user_activerdesactiveruser', '_controller' => 'App\\Controller\\UserController::activerDesactiverUser'], ['id'], ['POST' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_agence_detailagence', '_controller' => 'App\\Controller\\AgenceController::detailAgence'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'app_demande_detaildemande', '_controller' => 'App\\Controller\\DemandeController::detailDemande'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_agence_deleteagence', '_controller' => 'App\\Controller\\AgenceController::deleteAgence'], ['id'], ['DELETE' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_demande_deletedemande', '_controller' => 'App\\Controller\\DemandeController::deleteDemande'], ['id'], ['DELETE' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_objectif_deleteobjectif', '_controller' => 'App\\Controller\\ObjectifController::deleteObjectif'], ['id'], ['DELETE' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_interimaire_ajoutdocumentinterimaire', '_controller' => 'App\\Controller\\InterimaireController::ajoutDocumentInterimaire'], ['id'], ['POST' => 0], null, false, true, null]],
        413 => [[['_route' => 'app_demande_listedemandebyinterim', '_controller' => 'App\\Controller\\DemandeController::listeDemandeByInterim'], ['param'], ['GET' => 0], null, false, true, null]],
        439 => [[['_route' => 'app_objectif_listobjectif', '_controller' => 'App\\Controller\\ObjectifController::listObjectif'], ['id'], ['GET' => 0], null, false, true, null]],
        472 => [[['_route' => 'app_interimaire_detailsinterimaire', '_controller' => 'App\\Controller\\InterimaireController::detailsInterimaire'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'app_interimaire_getallinterymairesbycollaborateur', '_controller' => 'App\\Controller\\InterimaireController::getAllInterymairesByCollaborateur'], ['id'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'app_interimaire_getallinterymairesbymanager', '_controller' => 'App\\Controller\\InterimaireController::getAllInterymairesByManager'], ['id'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'app_interimaire_addcontratinterimaire', '_controller' => 'App\\Controller\\InterimaireController::addContratInterimaire'], ['id'], ['POST' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_profil_updateprofil', '_controller' => 'App\\Controller\\ProfilController::updateProfil'], ['id'], ['POST' => 0], null, false, true, null]],
        621 => [[['_route' => 'app_profil_deleteprofil', '_controller' => 'App\\Controller\\ProfilController::deleteProfil'], ['id'], ['POST' => 0], null, false, true, null]],
        659 => [[['_route' => 'app_structure_updatestructure', '_controller' => 'App\\Controller\\StructureController::updateStructure'], ['id'], ['POST' => 0], null, false, true, null]],
        682 => [[['_route' => 'app_structure_deletestructure', '_controller' => 'App\\Controller\\StructureController::deleteStructure'], ['id'], ['POST' => 0], null, false, true, null]],
        726 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        757 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        793 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        839 => [
            [['_route' => 'api_historique_passes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_historique_passes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        877 => [
            [['_route' => 'api_historique_passes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_historique_passes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_historique_passes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_historique_passes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\HistoriquePass', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        918 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        948 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
