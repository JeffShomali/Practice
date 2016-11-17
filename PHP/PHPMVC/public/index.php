<?php
/**
 * This is the only accesable public folder and file
 * This is Front controller and handles every request
 *
 *
 */

 // echo 'Request URL = "' .$_SERVER['QUERY_STRING']. '"' . '<br>';

// Require the controller classes
//require '../App/Controllers/Posts.php';
//require '../Core/Router.php';

/**
 * Autoloading  the controller classes
 */
spl_autoload_register(function ($class){
     $root = dirname(__DIR__); // get the parent directory
     $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
     if(is_readable($file)){
          require $root . '/' . str_replace('\\', '/', $class) . '.php';
     }
});

/**
 * Routing
 * this is same as require '../Core/Router.php';
 */
$router =  new Core\Router();

// echo get_class($router);
// Add the routes  to Router
//           | ---Route---| |-----Controller-------|  |--------Action-----|
$router->add('',            ['controller' => 'Home',  'action' => 'index']);
$router->add('posts',       ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new',   ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
// $router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

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
