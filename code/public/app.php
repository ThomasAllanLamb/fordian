<?php
  spl_autoload_register(function ($className) {
    include_once $className.".class.php";
  });

  $router = new Router();

  $router->route("hob", function () {
    echo "success";
  });

  $router->route("users/", function ($params) {
    echo "all users";
    echo "params";
    print_r($params);
  });

  $router->route("users/:id", function ($params) {
    echo "one user";
    echo "params";
    print_r($params);
  });  

  $router->matchCurrentRequest();
?>