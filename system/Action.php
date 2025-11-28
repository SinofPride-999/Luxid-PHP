<?php

namespace engine\system;

class Action
{
    public function nova($screen, $data = [])
    {
        return Application::$app->router->renderScreen($screen, $data);
    }
}
