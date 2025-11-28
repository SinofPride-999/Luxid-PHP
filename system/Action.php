<?php

namespace engine\system;

class Action
{
    public string $frame = 'app';   // default to app (main frame)
    public function setFrame($frame)
    {
        $this->frame = $frame;
    }

    public function nova($screen, $data = [])
    {
        return Application::$app->router->renderScreen($screen, $data);
    }
}
