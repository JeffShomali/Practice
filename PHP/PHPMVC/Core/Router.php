<?php

/**
 * Router
 * This is responsible to decide which controller should CallbackFilterIterator
 * and load
 * This router decides which controller and action to run on the route
 * Ex: www.myWebsite.com/posts?page=2
 */
class Router {
     /**
      * Accociative array of routes (routing table)
      * @var array
      */
     protected $routes = [];

     /**
      * Add a route to the routing table
      *
      * @param string $route  the route URL
      * @param array  $params Parametes (controller, action, etc.)
      */
     public function add($route, $params)
     {
          $this->routes[$route] = $params;
     }

     public function getRoutes()
     {
          return $this->routes;
     }

}
