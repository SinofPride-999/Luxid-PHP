<?php

namespace engine\actions;

use engine\system\Action;
use engine\system\Application;
use engine\system\Request;

// use engine\system\Application;

class HelloAction extends Action
{
    public function home()
    {
        $data = [
            'name' => "Jhay"
        ];
        return $this->nova('home', $data);
    }

    public function contact()
    {
        return  $this->nova('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        
        return 'Handling Submitted Data ...';
    }
}
