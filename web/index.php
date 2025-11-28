<?php

require_once __DIR__ . '/../vendor/autoload.php';

use engine\actions\AuthAction;
use engine\actions\HelloAction;
use engine\system\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HelloAction::class, 'home']);
$app->router->get('/contact', [HelloAction::class, 'contact']);
$app->router->post('/contact', [HelloAction::class, 'handleContact']);

$app->router->get('/login', [AuthAction::class, 'login']);
$app->router->post('/login', [AuthAction::class, 'login']);

$app->router->get('/register', [AuthAction::class, 'register']);
$app->router->post('/register', [AuthAction::class, 'register']);

$app->run();
