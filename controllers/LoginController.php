<?php

    namespace Controllers;

    class LoginController{
        public static function login(){
            echo 'desde Login';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
        }

        public static function logout(){
            echo 'desde logout';            
        }

        public static function crear(){
            echo 'desde crear';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
        }

        public static function recuperar(){
            echo 'desde recuperar';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
        }


        public static function reestablecer(){
            echo 'desde reestablecer';

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
        }

        public static function menseaje(){
            echo 'desde mensaje';            
        }

        public static function confirmar(){
            echo 'desde confirmar';            
        }

    }