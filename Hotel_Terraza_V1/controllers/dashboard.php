<?php

require_once "models/db.php";
require_once "models/Habitacion.php";
// Clase para gestionar el dashboard
class Dashboard {
    
    // Constructor de la clase
    public function __construct() {}

    // Método principal para cargar la vista del dashboard
    public function main() {
        // Se requiere la vista de inicio
        require_once "views/clientes/inicio.php";

        // Se requiere la lógica para mostrar la disponibilidad de las habitaciones
        $this->mostrarDisponibilidadHabitaciones();
    }

    // Método para mostrar la disponibilidad de las habitaciones
    private function mostrarDisponibilidadHabitaciones() {
        try {
            // Crear una instancia de la clase Habitacion
            $habitacion = new Habitacion();

            // Obtener la disponibilidad de las habitaciones
            $disponibilidad = $habitacion->obtenerDisponibilidad();

            if ($disponibilidad !== false) {
                // Muestra la información en una tabla
                echo "<table border='1'>";
                echo "<tr><th>Tipo de Habitación</th><th>Fecha de Inicio</th><th>Fecha de Fin</th><th>Ocupada</th></tr>";

                foreach ($disponibilidad as $fila) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($fila['tipo_habitacion']) . "</td>";
                    echo "<td>" . htmlspecialchars($fila['fecha_inicio']) . "</td>";
                    echo "<td>" . htmlspecialchars($fila['fecha_fin']) . "</td>";
                    echo "<td>" . ($fila['ocupada'] ? 'Sí' : 'No') . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                // Mostrar un mensaje si no hay habitaciones disponibles
                echo "No hay información de habitaciones disponible en este momento.";
            }
        } catch (Exception $e) {
            // Manejar la excepción, puedes imprimir un mensaje de error o redirigir a una página de error
            echo "Error: " . htmlspecialchars($e->getMessage());
        }
    }
}
?>




