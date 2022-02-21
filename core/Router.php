<?php 

namespace App\Core;

class Router {
    public array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $path, callable $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, callable $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        
        $callback = $this->routes[$method][$path] ?? false;

        if(!$callback) {
            echo "Not Found";
            exit;
        }

        call_user_func($callback);
    }
    
}