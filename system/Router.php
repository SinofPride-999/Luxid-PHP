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

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->setStatusCode(404);
            return "Not found";
        }

        if (is_string($callback)) {
            return $this->renderScreen($callback);
        }

        // execute callback
        return call_user_func($callback);
    }

    public function renderScreen($screen)
    {
        $frameContent = $this->frameContent();
        $screenContent = $this->renderOnlyScreen($screen);

        return str_replace('|| content ||', $screenContent, $frameContent);
    }

    protected function frameContent()
    {
        ob_start();   // basically starts the output caching - so nothing get outputted on the browser
        include_once Application::$ROOT_DIR . "/screens/frames/app.nova.php";
        return ob_get_clean();    // returns whatever that's in th buffer and clears it
    }

    protected function renderOnlyScreen($screen)
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/screens/$screen.nova.php";
        return ob_get_clean();
    }

}
