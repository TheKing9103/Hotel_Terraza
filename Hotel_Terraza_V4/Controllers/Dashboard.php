<?php

require_once "Models/Dashboards.php";
class Dashboard
{
     private $pdo;
     private $model;

     private $conn;

     public function __CONSTRUCT()
     {
          try {
               $this->model = new Dashboards();

               $this->pdo = DataBase::connection();
          } catch (Exception $e) {
               die($e->getMessage());
          }
     }
     public function login()
     {
          if ($_POST) {
               session_start();

               try {
                    $correo = $_POST['correo'];
                    $pass = $_POST['pass'];

                    $valmail = "frank@sena.com";
                    $valpass = "soysena123";

                    if ($correo == $valmail && $pass == $valpass) {
                         $_SESSION['id_usuario'] = 1;
                         $_SESSION['nombres'] = "Administrador Principal";

                         header('location:?c=Dashboard&a=main');
                    } else {
?>
                         <script language='JavaScript'>
                              alert("Acceso denegado");
                              location.href = "index.php";
                         </script>
               <?php
                    }
               } catch (Exception $e) {
                    die($e->getMessage());
               }
          }
     }
     public function main()
     {
          session_start();
          if (!empty($_SESSION['id_usuario'])) {
               require_once("Views/Dashboard/Modulos/Header.php");
               require_once("Views/Dashboard/Modulos/NavLat.php");
               require_once("Views/Dashboard/Reservas/Navsup.php");
               require_once("Views/Dashboard/Paginas/blanck.php");
               require_once("Views/Dashboard/Modulos/Footer.php");
          } else {
               ?>
               <script language='JavaScript'>
                    alert("inicio de sesion fallida");
                    location.href = "index.php";
               </script>
          <?php
          }
     }

     public function historico()
     {
          session_start();
          if (!empty($_SESSION['id_usuario'])) {
               require_once("Views/Dashboard/Modulos/Header.php");
               require_once("Views/Dashboard/Modulos/NavLat.php");
               require_once("Views/Dashboard/Historial/Navsup.php");
               require_once("Views/Dashboard/Paginas/blanck.php");
               require_once("Views/Dashboard/Modulos/Footer.php");
          } else {
          ?>
               <script language='JavaScript'>
                    alert("inicio de sesion fallida");
                    location.href = "index.php";
               </script>
          <?php
          }
     }
     public function usuarios()
     {
          session_start();
          if (!empty($_SESSION['id_usuario'])) {
               require_once("Views/Dashboard/Modulos/Header.php");
               require_once("Views/Dashboard/Modulos/NavLat.php");
               require_once("Views/Dashboard/Usuarios/Navsup.php");
               require_once("Views/Dashboard/Paginas/blanck.php");
               require_once("Views/Dashboard/Modulos/Footer.php");
          } else {
          ?>
               <script language='JavaScript'>
                    alert("inicio de sesion fallida");
                    location.href = "index.php";
               </script>
          <?php
          }
     }
     public function reservacion()
     {
          session_start();
          if (!empty($_SESSION['id_usuario'])) {
               $alm = new Dashboards();

               $alm->id_reservacion = $_REQUEST['id_reservacion'];
               $alm->nombres = $_REQUEST['nombres'];
               $alm->habitacion = $_REQUEST['habitacion'];
               $alm->num_habitaciones = $_REQUEST['num_habitaciones'];
               $alm->fecha_inicio = $_REQUEST['fecha_inicio'];
               $alm->fecha_fin = $_REQUEST['fecha_fin'];
               $alm->estado = $_REQUEST['estado'];
               $alm->tipo_cc = $_REQUEST['tipo_cc'];
               $alm->cc = $_REQUEST['cc'];
               $alm->correo = $_REQUEST['correo'];
               $alm->cel = $_REQUEST['cel'];
               $alm->ubicacion = $_REQUEST['ubicacion'];
               $alm->creado = $_REQUEST['creado'];
               
               $this->model->almacenar($alm);
               
               header('location:?c=Dashboard&main');

          } else {
          ?>
               <script language='JavaScript'>
                    alert("inicio de sesion fallida");
                    location.href = "index.php";
               </script>
<?php
          }
     }
}
