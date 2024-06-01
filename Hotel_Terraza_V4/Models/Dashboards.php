<?php
class Dashboards
{
    private $pdo;

    #reserva
    public $id_reservacion;
    public $habitacion;
    public $num_habitaciones;
    public $fecha_inicio;
    public $fecha_fin;
    public $estado;
    public $creado;

    #usuario 
    public $nombres;
    public $tipo_cc;
    public $cc;
    public $correo;
    public $cel;
    public $ubicacion;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = DataBase::connection();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function habitacion()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM `habitaciones`");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function familiar()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM `habitaciones` WHERE id_habitacion = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function reservacion()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM reservacion");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function historico()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM reservacion_historico");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar($data)
    {
        try {

            $fields = [
                'nombres', 'habitacion', 'tipo_cc', 'cc', 'correo', 'cel',
                'ubicacion', 'num_habitaciones', 'fecha_inicio', 'fecha_fin', 'estado'
            ];

            $placeholders = rtrim(str_repeat('?,', count($fields)), ',');

            $sql = "INSERT INTO reservacion (" . implode(',', $fields) . ") VALUES ($placeholders)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array_map(function ($field) use ($data) {
                return $data->$field;
            }, $fields));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function almacenar(Dashboards $data)
    {
        $fields = [
            'id_reservacion', 'nombres', 'tipo_cc', 'cc', 'correo', 'cel',
            'ubicacion', 'num_habitaciones', 'fecha_inicio', 'fecha_fin', 'estado', 'creado'
        ];

        $placeholders = rtrim(str_repeat('?,', count($fields)), ',');

        $sql = "INSERT INTO reservacion_historico (" . implode(',', $fields) . ") VALUES ($placeholders)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_map(function ($field) use ($data) {
            return $data->$field;
        }, $fields));

        $sql2 = "DELETE FROM reservacion WHERE `id_reservacion` = ? ";

        $this->pdo->prepare($sql2)
            ->execute(
                array(
                    $data->id_reservacion
                )
            );
    }
}
