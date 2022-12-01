<?php

class Admin
{
    public function dash()
    {
        $routes = new routes();
        return $routes->view("./app/pages/admin/index.php");
    }
}