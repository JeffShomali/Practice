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
      * Parameters from the matched route
      * @var array
      */
     protected $params = [];

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

     /**
      * Match the route to the routes in the routing table
      * setting property if a route is found.
      *
      * @param  string $url The route URL
      * @return boolean      True if a match found, false otherwise
      */
     public function match($url)
     {
          foreach ($this->routes as $route => $params) {
               if($url == $route) {
                    $this->params = $params;
                    return true;
               }
          }
          return false;
     }

     /**
      * Get the currently matched paramaeters
      * @return array
      */
     public function getParams()
     {
          return $this->params;
     }


}
