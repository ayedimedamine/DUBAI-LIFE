<?php

use FastRoute\Dispatcher;

require "vendor/autoload.php";

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'views/home.php');
    $r->addRoute('GET', '/shop', 'views/shop.php');
    // $r->addRoute('GET', '/', 'views/payment.php');
    $r->addRoute('GET', '/cancel', 'views/cancel.php');
    $r->addRoute('GET', '/success', 'views/successModal.php'); // SUCCESS MODAL 
    // $r->addRoute('GET', '/mail', 'views/email.html'); // EMAIL TEMPLATE VERSION 0
    $r->addRoute('GET', '/mail', 'views/email-v1.html'); // EMAIL TEMPLATE VERSION 1
    $r->addRoute('GET', '/mail2', 'views/email-v2.html'); // EMAIL TEMPLATE VERSION 2

    $r->addRoute('POST', '/checkout', 'class/checking.php');
    $r->addRoute('POST', '/webhook', 'config/webhook.php');
    
    $r->addRoute('GET', '/admin/login', 'views/login.php');
    $r->addRoute('POST', '/admin/login', 'class/Login.php');
    $r->addRoute('GET', '/admin/dashbord', 'views/dashboard.php');
    // $r->addRoute('GET', '/api', 'views/api.php');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        require 'views/404.php';
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        require $handler;
        break;
}
