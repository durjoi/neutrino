<?php

namespace App\Core;

class Request {
    public function getPath() {
        $position = strpos($_SERVER['REQUEST_URI'], '?');

        if($position === false) {
            return $_SERVER['REQUEST_URI'];
        }
        
        $path = substr($_SERVER['REQUEST_URI'], 0, $position);

        return $path;
    }

    public function getMethod() {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        return $method;
    }
}