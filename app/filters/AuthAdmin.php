<?php
class AuthAdmin{
//    0 = visiteur
//    1 = commentaire
//    2 = redacteur
//    3 = moderateur
//    4 = gestionnaire
//    5 = administrateur total
    private $role_level = 5;
    function __construct()
    {
        $session = new session();
        $routes = new routes();
        $user = $session->get("user");
        if(!$user)
        {
            return $routes->redirect("/");
        }
        if(!isset($user['role'])||!$user['role'])
        {
            return $routes->redirect("/");
        }
        if($user['role']<$this->role_level)
        {
            return $routes->redirect("/");
        }
        return null;
    }

    public function cansee($level = false)
    {
        $session = new session();
        $routes = new routes();
        $user = $session->get("user");
        if($user['role']<$level)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}