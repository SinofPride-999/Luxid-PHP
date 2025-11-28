<?php

namespace engine\system;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Action $action;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    // getter | setter ======================
    public function getAction()
    {
        return $this->action;
    }
    public function setAction(Action $action)
    {
        $this->action = $action;
    }
}
