<?php
require_once "./app/conf/routes.php";
class Home
{
    public function index()
    {
        $routes = new routes();
        return $routes->view('./app/pages/index.php');
    }

    public function pages($page = false)
    {
        $routes = new routes();
        //tester si la page existe
        if(!file_exists('./app/pages/'.$page.".php"))
        {
            return(404);
        }
        return $routes->view('./app/pages/'.$page.".php");
    }
}