<?php

    class Landing
    {
        public function main()
        {
            require_once("Views/Landing/Modulos/Header.php");
            require_once("Views/Landing/Paginas/inicio.php");
            require_once("Views/Landing/Modulos/Footer.php");
        }

         public function nosotros()
        {
            require_once("Views/Landing/Modulos/Header.php");
            require_once("Views/Landing/Paginas/nosotros.php");   
            require_once("Views/Landing/Modulos/Footer.php");
        }

          public function reserva()
        {
            require_once("Views/Landing/Modulos/Header.php");
            require_once("Views/Landing/Paginas/reserva.php");  
            require_once("Views/Landing/Modulos/Footer.php");
        }

          public function contacto()
        {
            require_once("Views/Landing/Modulos/Header.php");
            require_once("Views/Landing/Paginas/contacto.php");                
            require_once("Views/Landing/Modulos/Footer.php");
        }

    }

?>