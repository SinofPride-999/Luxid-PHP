<?php

namespace engine\system;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [
        /* 'get' => [
            '/' => callback,
            '/contact' => callback,
        ],
        'post' => [
            '/user' => callback,
        ], */
    ];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderScreen("_404");
        }

        if (is_string($callback)) {
            return $this->renderScreen($callback);
        }

        // to make the action an object, not an instance
        if (is_array($callback)) {
            Application::$app->action = new $callback[0]();
            $callback[0] = Application::$app->action;
        }

        // execute callback
        return call_user_func($callback, $this->request);
    }

    public function renderScreen($screen, $data = [])
    {
        $frameContent = $this->frameContent();
        $screenContent = $this->renderOnlyScreen($screen, $data);

        return str_replace('|| content ||', $screenContent, $frameContent);
    }

    public function renderContent($screenContent)
    {
        $frameContent = $this->frameContent();

        return str_replace('|| content ||', $screenContent, $frameContent);
    }

    protected function frameContent()
    {
        $frame = Application::$app->action->frame;

        ob_start();   // basically starts the output caching - so nothing get outputted on the browser
        include_once Application::$ROOT_DIR . "/screens/frames/$frame.nova.php";
        return ob_get_clean();    // returns whatever that's in th buffer and clears it
    }

    protected function renderOnlyScreen($screen, $data)
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once Application::$ROOT_DIR . "/screens/$screen.nova.php";
        return ob_get_clean();
    }

}

