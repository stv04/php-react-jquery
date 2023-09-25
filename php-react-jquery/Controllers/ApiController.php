<?php
    include_once(__DIR__."/../SumaArray.php");

    class ApiController {

        public function Home() {
            echo "Ejemplo Api";
        }

        public function SumaUno() {
            echo sumaArray([1, 4, 3, 0]);
        }
        
        public function SumaDos() {
            echo sumaArray([1, 2, [5, 8], 4]);
        }

        public function SumaTres() {
            echo sumaArray([0, [6, 2], null, 7, 1]);
        }
    }