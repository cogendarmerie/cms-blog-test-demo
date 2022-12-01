<?php
require_once "./app/conf/routes.php";
class Articles
{
    public function show($articleName = false)
    {
        $routes = new routes();
        return $routes->view("./app/pages/articles/".$articleName.".php");
    }
}