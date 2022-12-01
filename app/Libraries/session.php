<?php

class session
{
    public function start()
    {
        if(!isset($_SESSION['start']))
        {
            session_start();
            $_SESSION['start'] = true;
        }
    }
    public function get($title = false)
    {
        if(!isset($_SESSION['start']))
        {
            session_start();
        }
        if(isset($_SESSION[$title]))
        {
            return $_SESSION[$title];
        }
        else
        {
            return null;
        }
    }
    public function set($title = false, $value = false)
    {
        if (!$title||!$value)
        {
            return false;
            exit();
        }
        if(!isset($_SESSION['start']))
        {
            session_start();
        }
        $_SESSION[$title] = $value;
        return isset($_SESSION[$title]);
    }
    public function delete($title = false)
    {
        if(!isset($_SESSION['start']))
        {
            session_start();
        }
        unset($_SESSION[$title]);
        if(isset($_SESSION[$title]))
        {
            //non supprimer
            return false;
        }
        else
        {
            //supprimer avec succès
            return true;
        }
    }
}