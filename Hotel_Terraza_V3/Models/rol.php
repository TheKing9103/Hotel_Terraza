<?php
include 'database.php';

$nombre_cliente = $_POST['nombre_cliente'];
$fecha_entrada = $_POST['fecha_entrada'];
$fecha_salida = $_POST['fecha_salida'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$num_habitaciones = $_POST['num_habitaciones'];

$sql = "INSERT INTO reservas (nombre_cliente, fecha_entrada, fecha_salida, tipo_habitacion, num_habitaciones)
        VALUES ('$nombre_cliente', '$fecha_entrada', '$fecha_salida', '$tipo_habitacion', $num_habitaciones)";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito.";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>
