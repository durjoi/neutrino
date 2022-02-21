<?php 

namespace App\Core;

class Application {
    public Router $router;
    public Request $request;
    public static string $root_dir;

    public function __construct(string $root_dir)
    {
        self::$root_dir = $root_dir;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        $this->router->resolve();
    }
}