<?php

class Secure
{
    public function login()
    {
        $routes = new routes();
        return $routes->view('./app/pages/secure/index.php');
    }

    public function signin()
    {
        $Tools = new Tools();
        $database = new database();
        $routes = new routes();
        $session = new session();
        if(isset($_POST['username'])&&isset($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $database->get_data("secure_users", "*", "username='".$username."'", "1");
            if(!$user)
            {
                $Tools->setNotif("danger", "Utilisateur introuvable", "L'identifiant ne correspond à aucun utilisateur.");
                return $routes->redirect('/secure/login');
                exit();
            }
            else
            {
                if(!password_verify($password, $user['password']))
                {
                    $Tools->setNotif("danger", "Mot de passe incorrect", "Le mot de passe saisie est incorrect.");
                    return $routes->redirect("/secure/login");
                }
                else
                {
                    unset($user['password']);
                    $session->set("user", $user);
                    return $routes->redirect("/admin/dash");
                }
            }
        }
        else
        {
            $Tools->setNotif("danger", "Champs vide", "Un ou plusieurs champs requis sont vides.");
            return $routes->redirect('/secure/login');
        }
        return 0;
    }
}