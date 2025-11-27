<?php

require_once __DIR__ . '/../vendor/autoload.php';
use engine\system\Application;

$app = new Application();

$app->router->get('/', function() {
    return "Hello World";
});
$app->router->get('/about', function() {
    return "About Page";
});
$app->router->get('/contact', 'contact');

$app->run();
