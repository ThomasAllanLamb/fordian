<?php

  class Router {
    private $routes;

    public function __construct () {
      $this->routes = [];
    }

    public function route ($path, $f)
    {
      $this->routes[] = new Route($path, $f);
    }

    public function matchCurrentRequest () {
      $path = $_GET["route"];

      for ($i = 0; $i <= count($this->routes)-1; $i++) {
        $route = $this->routes[$i];
        if ($route->isMatch($path))
        {
          $route->applyPath($path);
          return;
        }
      }
    }
  }
  
?>