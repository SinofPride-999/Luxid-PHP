<?php

namespace engine\actions;

use engine\system\Action;
use engine\system\Request;
use engine\entities\RegisterEntity;

class AuthAction extends Action
{
    public function login()
    {
        $this->setFrame('auth');

        return $this->nova('login');
    }

    public function register(Request $request)
    {
        $registerEntity = new RegisterEntity();

        if ($request->isPost()){
            $registerEntity->loadData($request->getBody());

            // entity validate? && did it create the entity after it got validated?
            if ($registerEntity->validate() && $registerEntity->register()) {
                return 'Success';
            }

            return $this->nova('register', [
                'entity' => $registerEntity
            ]);
        }
        $this->setFrame('auth');
        return $this->nova('register', [
            'entity' => $registerEntity
        ]);
    }
}

