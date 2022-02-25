<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core
 */

class Router 
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * Router Constructor
     * 
     * @param \app\core\Request $request
     * @param \app\core\Response $response
     */

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
        if ($callback === false){
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        }
        if (is_string($callback)){
            return $this->renderView($callback);
        }
        if (is_array($callback)){
            // Application::$app->controller = new $callback[0]();
            // $callback[0] = Application::$app->controller;
            $callback[0] = new $callback[0]();
        }
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyViews($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyViews($view, $params = [])
    {
        extract($params);
        // foreach ($params as $key => $value) {
        //     $$key = $value;
        // }
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}