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
        $articles = new articlesAdministration();
        if(isset($_POST['action']))
        {
            if($_POST['action']=="create")
            {
                $data = $_POST;
                unset($data['action']);
                if($articles->publish($data['illustrationUrl'], $data['title'], $data['author'], $data['categorie'], $data['article']))
                {
                    echo "create";
                }
                exit();
            }
        }
        else
        {
            return $routes->view("./app/parts/admin/header.php") . $routes->view("./app/pages/articles/editor.php") . $routes->view("./app/parts/admin/footer.php");
        }
    }
}