<?php

namespace engine\actions;

use engine\system\Action;
use engine\system\Request;

class AuthAction extends Action
{
    public function login()
    {
        $this->setFrame('auth');

        return $this->nova('login');
    }

    public function register(Request $request)
    {
        $this->setFrame('auth');

        if ($request->isPost()){
            return 'Handle submitted data';
        }
        return $this->nova('register');
    }
}

