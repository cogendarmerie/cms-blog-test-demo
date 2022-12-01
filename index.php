<?php
require_once "./app/Libraries/database.php";
require_once "./app/Libraries/Tools.php";
require_once "./app/conf/routes.php";
$session = new session();
$routes = new routes();
$route = $routes->select_routes();
$session->start();
if($route)
{
    if(isset($route['controller'])&&isset($route['function']))
    {
        require "./app/controllers/".$route['controller'].".php";
        $controller = new $route['controller'];
        if(isset($route['funcArgList']))
        {
            $reflect = new ReflectionMethod($route['controller'], $route['function']);
            $page = $reflect->invokeArgs(new $route['controller'](), $route['funcArgList']);
            if($page==404)
            {
                include "./app/pages/error/404.html";
                exit();
            }
//            include $page;
//            if(!include $controller->pages($route['funcArgList']))
//            {
//                echo "404";
//            }
        }
        else
        {
            $function = $route['function'];
            $page = $controller->$function();
            if($page==404)
            {
                include "./app/pages/error/404.html";
            }
//            require $page;
        }
    }
}
else
{
    include "./app/pages/error/404.html";
}