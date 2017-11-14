<?php

class Router {

   protected $routes = [
      'GET' => [],
      'POST' => []
   ];

   public static function load($file)
   {
      $router = new static;

      require $file;

      return $router;
   }

   public function get($uri, $controller)
   {
      $this->routes['GET'][$uri] = $controller;
   }

   public function post($uri, $controller)
   {
      $this->routes['POST'][$uri] = $controller;
   }

   public function go($uri, $method)
   {
      if (array_key_exists($uri, $this->routes[$method])) {
         return __DIR__ .'/../'. $this->routes[$method][$uri];
      }

      throw new Exception('ERROR: URI DOES NOT EXIST');
   }
}
