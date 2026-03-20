<?php
spl_autoload_register(function (string $className) {
   require_once __DIR__ . '/' . str_replace('\\', '/', $className . '.php');
 });


$route = $_GET['route'] ?? '';
$routes = require __DIR__ .'/src/config/routes.php';
$isRouteFound = false;
foreach($routes as $pattern => $controllerandAction)  {
   preg_match($pattern, $route, $matches);
   if(!empty($matches)){
    $isRouteFound = true;
    break;
   }
} 
if(!$isRouteFound){
    echo'Страница не найдена';
  return;
}
$controllerName = $controllerandAction[0];
$actionName = $controllerandAction[1];
unset ($matches[0]);
$controller = new $controllerName;
 $controller->$actionName(...$matches);
// var_dump($controllerandAction);
// var_dump($matches);

 ?>
