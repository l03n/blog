<?php

namespace Router;

class Routes
{
    public $uri;

    public $routes = [
        '' => '../resources/views/home.php',
        'contact' => '../resources/views/contact.php',
    ];

    public function __construct() {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    }

    public function getUri() {
        return $this->uri;
    }

    public function get() {
        if(array_key_exists($this->uri, $this->routes)) {
            require_once $this->routes[$this->uri];
        } else {
            die('page not found');
        }
    }
}
