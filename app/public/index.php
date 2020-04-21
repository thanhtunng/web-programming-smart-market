<?php

require '../Core/Router.php';

$router = new Router();

$router->add("/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/");

echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';

if ($router->match($_SERVER['QUERY_STRING'])) {
  echo '<pre>';
  var_dump($router->getParams());
  echo '</pre>';
} else {
  echo 'No route found for url ' . $_SERVER['QUERY_STRING'];
}