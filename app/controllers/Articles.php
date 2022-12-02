<?php
require_once "./app/conf/routes.php";
class Articles
{
    public function show($articleName = false)
    {
        $routes = new routes();
        return $routes->view("./app/pages/articles/".$articleName.".php");
    }

    public function create(){
        $routes = new routes();
        return $routes->view("./app/pages/articles/editor.php");
    }
}