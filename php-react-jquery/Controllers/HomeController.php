<?php
    class HomeController {

        public function Home() {
            require_once(__DIR__."/../views/index.php");
        }

        public function React() {
            require_once(__DIR__.'/../Assets/react-app/index.html');
        }

        public function JQuery() {
            require_once(__DIR__.'/../views/jquery.php');
        }
    }