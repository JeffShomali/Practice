<?php
/**
 * This is the only accesable public folder and file
 * This is Front controller and handles every request
 *
 *
 */

 // echo 'Request URL = "' .$_SERVER['QUERY_STRING']. '"' . '<br>';

// Require the controller clss
require '../App/Controllers/Posts.php';

require '../Core/Router.php';
$router =  new Router();

// echo get_class($router);
// Add the routes  to Router
//           | ---Route---| |-----Controller-------|  |--------Action-----|
$router->add('',            ['controller' => 'Home',  'action' => 'index']);
$router->add('posts',       ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new',   ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
// $router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');

/*
// Display the routing table
echo '<pre>';
//var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';

// Match the requested route
$url = $_SERVER['QUERY_STRING'];

if($router->match($url)) {
     echo '<pre>';
     var_dump($router->getParams());
     echo '</pre>';
}else {
     echo "No route found for URL '$url'";
}
*/
$router->dispatch($_SERVER['QUERY_STRING']);
