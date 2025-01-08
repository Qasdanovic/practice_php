<?php
namespace Core;
use Core\Middlewares\Auth;
use Core\Middlewares\Guest;
use Core\Middlewares\Middleware;

class Router {

    protected $routes = [] ;

    public function add($uri, $method, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "method" => $method,
            "controller" => $controller,
            "middleware" => null
        ] ;

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, "GET", $controller);
    }


    public function post($uri, $controller)
    {
        return $this->add($uri, "POST", $controller);
    }


    public function delete($uri, $controller)
    {
        return $this->add($uri, "DELETE", $controller);
    }


    public function put($uri, $controller)
    {
        return $this->add($uri, "PUT", $controller);
    }


    public function patch($uri, $controller)
    {
        return $this->add($uri, "PATCH", $controller);
    }


    public function only($key)
    {
//         dd($key);
        $this->routes[array_key_last($this->routes)]["middleware"] = $key;

        return $this;
    }


    public function route($uri, $method)
    {
        foreach ($this->routes as $route) :
            if ($route["uri"] === $uri and $route['method'] === strtoupper($method)) {

                Middleware::resolve($route["middleware"]);
                return require base_path("Http/controllers/" . $route["controller"]);
            };
        endforeach;

    }
        // abort(404);
}