<?php
    class App{

        protected $controller = "Home";
        protected $method = "index";
        protected $params = [];

        public function __construct() { 
            if(isset($url)){
                if(file_exists("../app/controllers/")){
                    $this->controller = $url[0];
                }
            }
    
            $this->controller = new $this->controller;


            
        }

        public function parseURL(){
            if(isset($_GET["url"])){
                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }

    }
?>
