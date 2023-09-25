<?php
    class Router {
        private $controller;
        private $route;

        private $folderPath;
        private $urlPath;
        private $url;
        

        public function __construct() {
            $this->folderPath = dirname($_SERVER["SCRIPT_NAME"]);
            $this->urlPath = $_SERVER["REQUEST_URI"];
            $this->url = substr(
                $this->urlPath, 
                strlen($this->folderPath)
            );

            $path = $this->urlPath;
            $GLOBALS["path"] = $path;

            $this->capturarRuta();
        }

        function capturarRuta() {
            $url = explode("/", $this->url);
            $this->controller = empty($url[1]) ? "Home" : $url[1];
            $this->controller = $this->controller . "Controller";
            $this->route = empty($url[2]) ? "Home" : $url[2];

            require_once(__DIR__."/Controllers/".$this->controller.".php");
        }

        function run() {
            $c = new $this->controller();
            $m = $this->route;

            $c->$m();
        }
    }