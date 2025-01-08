<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'home.accessdenied' => [[], ['_controller' => 'App\\Controller\\AccessDeniedController::index'], [], [['text', '/accessdenied']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'comment_add' => [['creationId'], ['_controller' => 'App\\Controller\\CommentController::addComment'], [], [['variable', '/', '[^/]++', 'creationId', true], ['text', '/comment/add']], [], [], []],
    'comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::deleteComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment/delete']], [], [], []],
    'comments_list' => [['creationId'], ['_controller' => 'App\\Controller\\CommentController::listComments'], [], [['variable', '/', '[^/]++', 'creationId', true], ['text', '/comments']], [], [], []],
    'contact.index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'creation.index' => [[], ['_controller' => 'App\\Controller\\CreationController::index'], [], [['text', '/creations']], [], [], []],
    'creation_.index.public' => [[], ['_controller' => 'App\\Controller\\CreationController::indexPublic'], [], [['text', '/creations/publique']], [], [], []],
    'creation.comments' => [['id'], ['_controller' => 'App\\Controller\\CreationController::comments'], [], [['text', '/comments'], ['variable', '/', '[^/]++', 'id', true], ['text', '/creations']], [], [], []],
    'creation.like' => [['id'], ['_controller' => 'App\\Controller\\CreationController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id', true], ['text', '/creations']], [], [], []],
    'creation_show' => [['id'], ['_controller' => 'App\\Controller\\CreationDetailController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/creation']], [], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'security.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'security.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'security.registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'security.redirect_after_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], [], [['text', '/redirect-after-login']], [], [], []],
    'user.edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'user.edit.password' => [['id'], ['_controller' => 'App\\Controller\\UserController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
    'access_denied' => [[], ['_controller' => 'App\\Controller\\UserController::accessDenied'], [], [['text', '/access-denied']], [], [], []],
];