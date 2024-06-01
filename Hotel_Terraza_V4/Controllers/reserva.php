<?php
require_once "Models/Reservas.php";
class Reserva
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Reservas();
    }
    public function registro()
    {
        require_once("Views/Landing/Modulos/Header.php");
        require_once("Views/Landing/Modulos/Nav.php");
        require_once("Views/Landing/Paginas/reserva.php");
        require_once("Views/Landing/Modulos/Footer.php");
    }
}
