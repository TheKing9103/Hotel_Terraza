<?php

class Habitacion {
    
    // Constructor de la clase
    public function __construct() {}

    /**
     * Método para obtener la disponibilidad de las habitaciones.
     *
     * @return array|false Retorna un arreglo asociativo con la información de disponibilidad o false en caso de error.
     * @throws Exception Si hay un error en la consulta.
     */
    public function obtenerDisponibilidad() {
        try {
            // Asegúrate de incluir la conexión a la base de datos
            $conexion = Database::connection();

            // Consulta para obtener información sobre la disponibilidad de habitaciones
            $query = "SELECT tipo_habitacion, fecha_inicio, fecha_fin, ocupada FROM disponibilidad_habitaciones";
            $statement = $conexion->prepare($query);

            // Ejecutar la consulta
            $statement->execute();

            // Obtener resultados
            $disponibilidad = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Cierra la conexión
            $conexion = null;

            return $disponibilidad;
        } catch (PDOException $e) {
            // Lanza una excepción si hay un error en la consulta
            throw new Exception("Error al obtener información de habitaciones: " . $e->getMessage());
        }
    }

    // Otros métodos relacionados con la gestión de habitaciones podrían ir aquí
}
?>


