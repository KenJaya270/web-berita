<?php
    class App{

        protected $controller = "Home";
        protected $method = "index";
        protected $params = [];

        if(file_exists("../app/controllers/")){
            $this->controller = $url[0];
        }

        require_once "../app/controllers/". $this->controller.".php";
        $this->controller = new $this->controller;
    
        public function __construct() {
            echo $this->parseURL()[0].$this->parseURL()[1];
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
