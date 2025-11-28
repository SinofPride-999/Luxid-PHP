<?php

namespace engine\actions;

use engine\system\Application;

class BaseAction
{
    public static function home()
    {
        $data = [
            'name' => "Jhay"
        ];
        return Application::$app->router->renderScreen('home', $data);
    }

    public static function contact()
    {
        return Application::$app->router->renderScreen('contact');
    }

    public static function handleContact()
    {
        return 'Handling Submitted Data ...';
    }
}
