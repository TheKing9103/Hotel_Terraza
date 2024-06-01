<?php
require_once "Models/Dashboards.php";
class Landing
{
    private $model;
    private $pdo;

    public function __construct()
    {
        $this->model = new Dashboards;
        $this->pdo = DataBase::connection();
    }
    public function main()
    {
        if (session_start() == true) {
            session_destroy();
        }
        require_once("Views/Landing/Modulos/Header.php");
        require_once("Views/Landing/Paginas/inicio.php");
        require_once("Views/Landing/Modulos/Footer.php");
    }

    public function nosotros()
    {
        if (session_start() == true) {
            session_destroy();
        }
        require_once("Views/Landing/Modulos/Header.php");
        require_once("Views/Landing/Paginas/nosotros.php");
        require_once("Views/Landing/Modulos/Footer.php");
    }

    public function reserva()
    {
        $alm = new Dashboards;

        $alm->fecha_inicio = $_REQUEST['fecha_ini'];
        $alm->fecha_fin = $_REQUEST['fecha_fin'];
        $alm->estado = 'pendinte';
        $alm->nombres = $_REQUEST['nombres'] . " " . $_REQUEST['apellidos'];
        $alm->tipo_cc = $_REQUEST['documento'];
        $alm->cc = $_REQUEST['numero_documento'];
        $alm->correo = $_REQUEST['correo'];
        $alm->cel = $_REQUEST['cel'];
        $alm->ubicacion = $_REQUEST['direccion'];
        $alm->habitacion = $_REQUEST['tipo_habitacion'];
        $alm->num_habitaciones = $_REQUEST['num_habitaciones'];

        // Validación de superposición de fechas
        $superposicion = $this->verificarSuperposicionFechas($alm->fecha_inicio, $alm->fecha_fin);

        if ($superposicion == 1) {
            $this->model->Registrar($alm);

            echo "<script language='JavaScript'>
                    alert('Gracias por solicitar su reservación. Pronto nos comunicaremos con usted y le informaremos.');
                    location.href = 'index.php';
                  </script>";
        } else {
            echo "<script language='JavaScript'>
                    alert('Ya existe una reservación para las fechas seleccionadas. Por favor, elija otras fechas.');
                    location.href = 'index.php';
                  </script>";
        }
    }

    private function verificarSuperposicionFechas($fecha_inicio, $fecha_fin)
    {
        // $sql = "SELECT 
        //             CASE 
        //                 WHEN COUNT(*) > 0 THEN 0 
        //                 ELSE 1 
        //             END AS resultado
        //         FROM reservacion_historico
        //         WHERE NOT (
        //             fecha_inicio > :fecha_fin OR
        //             fecha_fin    < :fecha_inicio
        //         )
        //         AND estado = 'aceptada'";

        $sql = "SELECT 
        CASE 
            WHEN (
                SUM(CASE WHEN habitacion = 'A' THEN 1 ELSE 0 END) > 4 OR
                SUM(CASE WHEN habitacion = 'B' THEN 1 ELSE 0 END) > 1
            ) THEN 0 
            ELSE 1 
        END AS resultado
    FROM reservacion_historico
    WHERE NOT (
        fecha_inicio > :fecha_fin OR
        fecha_fin    < :fecha_inicio
    )
    AND estado = 'aceptada'";


        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':fecha_inicio', $fecha_inicio);
        $stmt->bindParam(':fecha_fin', $fecha_fin);
        $stmt->execute();

        $resultado = $stmt->fetchColumn();

        return $resultado;
    }
}
