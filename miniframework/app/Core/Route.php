<?php

class Route{
    protected $controller = "HomeController";
    protected $method = "index";
    protected $params = [];    

    public function __construct(){   
        if(isset($_GET['url'])){
            $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));                                              
        } else {
            require_once '../app/Controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            return call_user_func_array([$this->controller, $this->method], $this->params);
        }

        //validation URL for Controllers
        $temp = strtoupper($url[0][0]) . substr($url[0], 1);                

        //Checking Controller    
        $url[0] = $temp . 'Controller';        
        $searchFile = '../app/Controllers/'.$url[0].'.php';
        if(file_exists($searchFile)){
            $this->controller = $url[0];
            require_once '../app/Controllers/'.$this->controller.'.php';
            $this->controller = new $this->controller;
            
            //Checking Method
            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                }
            }

            unset($url[0]);
            unset($url[1]);
            $this->params = $url;            
        } else {
            error();
            // die('munyuk');
        }
        
        return call_user_func_array([$this->controller, $this->method], $this->params);
    }
}