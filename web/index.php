<?php

require_once __DIR__ . '/../vendor/autoload.php';

use engine\actions\BaseAction;
use engine\system\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [BaseAction::class, 'home']);
$app->router->get('/contact', [BaseAction::class, 'contact']);
$app->router->post('/contact', [BaseAction::class, 'handleContact']);

$app->run();
