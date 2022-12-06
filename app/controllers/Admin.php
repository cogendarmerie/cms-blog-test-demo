<?php

class Admin
{
    public function dash()
    {
        $routes = new routes();
        return $routes->view("./app/parts/admin/header.php") . $routes->view("./app/pages/admin/index.php") . $routes->view("./app/parts/admin/footer.php");
    }
}