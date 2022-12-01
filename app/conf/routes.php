<?php
class routes
{
    public $routes;

    function __construct()
    {
        $this->defineroute("/", "Home::index");
        $this->defineroute("/secure/login", "Secure::login");
        $this->defineroute("/secure/signin", "Secure::signin");
        $this->defineroute("/articles/view/(:any)", "Articles::show/$1");
        $this->defineroute("/admin/dash", "Admin::dash", "AuthAdmin");
        $this->defineroute("/(:any)", "Home::pages/$1");
    }

    public function defineroute($route = false, $controller = false, $filter = false)
    {
        if($filter)
        {
            $data['filter'] = $filter;
        }
        if($route && $controller)
        {
            $data['route'] = $route;
            $data['controller'] = explode("::", $controller)[0];
            $data['function'] = explode("::", $controller)[1];
            if(isset(explode("/", $data["function"])[1]))
            {
                $data['function'] = explode("/", $data["function"])[0];
                $data['funcArgs'] = true;
            }
            $this->routes[] = $data;
            return (1);
        }
        else
        {
            return (0);
        }
    }

    public function get_url()
    {
        $url = $_SERVER['REQUEST_URI'];
        return $url;
    }

    public function return_argument($url = false)
    {
        if($url==false)
        {
            $args = explode("/",$this->get_url());
        }
        else
        {
            $args = explode("/",$url);
        }
        if($args[0]=="")
        {
            array_shift($args);
        }
        if(!$args)
        {
            $return = 0;
        }
        return $args;
    }

    public function delany($url = false)
    {
        $url = explode("/", $url);
        $i = 0;
        foreach ($url as $segment)
        {
            if($segment=="(:any)")
            {
                return $i;
            }
            $i++;
        }
        return NULL;
    }

    public function select_routes()
    {
        $routes = $this->routes;
        $url = $this->get_url();
        $args = $this->return_argument();
        if($routes)
        {
            foreach($routes as $route)
            {
                $routeMaxPos = $this->delany($route['route']);
                if($routeMaxPos)
                {
                    $argsRoute = $this->return_argument($route['route']);
                    $i = 0;
                    while($i<$routeMaxPos && $argsRoute[$i]!="(:any)")
                    {
                        if(isset($argsRoute[$i])&&isset($args[$i]))
                        {
                            if($argsRoute[$i] != $args[$i])
                            {
                                break;
                            }
                        }
                        $i++;
                    }
                    $j=$i;
                    while(isset($args[$j]))
                    {
                        $funcArgList[] = $args[$j];
                        $j++;
                    }
                    if(isset($funcArgList))
                    {
                        $route['funcArgList'] = $funcArgList;
                    }
                    if($i == count($argsRoute)-1)
                    {
                        return $route;
                    }
                }
                elseif($route['route']==$url)
                {
                    if(isset($route['filter']))
                    {
                        require "./app/filters/".$route['filter'].".php";
                        $filter = new $route['filter']();
                    }
                    return $route;
                }
            }
        }
        else
        {
            return 0;
        }
    }

    public function redirect($destination = false)
    {
        if(!$destination)
        {
            header('Location: /');
            exit();
        }
        header("Location: $destination");
        exit();
    }

    public function view($page = false)
    {
        if($page==false)
        {
            return 0;
            exit();
        }
        return include($page);
    }
}