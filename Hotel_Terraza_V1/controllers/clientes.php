<?php

if (isset($_POST['bday'])  )   {
    try {
        // Obtener los valores del formulario
        $bday = $_POST['bday'];
        $bdey = $_POST['bdey'];
        // ... (otros campos)

        // Conexión a la base de datos
        require_once "../mosdels/db.php"; // Asegúrate de que el nombre del archivo coincida
        $conexion = Database::connection();

        // Consulta SQL con sentencia preparada
        $consulta = $conexion->prepare("INSERT INTO clientes (fechaI, fechaS, nombre, apellido, tipo_documento, numeroDocumento, correo, movil, ubicacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Vincular parámetros
        $consulta->bindParam(1, $bday);
        $consulta->bindParam(2, $bdey);
        // ... (otros campos)

        // Ejecutar la consulta SQL
        $consulta->execute();

        echo "Registro exitoso.<br>"; // Mensaje de prueba
        // Redireccionar al usuario a la página de inicio de sesión si el registro es exitoso
        header("location: ../index.php");
        exit(); // Terminar la ejecución del script después de la redirección
    } catch (PDOException $e) {
        // Manejar la excepción, puedes imprimir un mensaje de error o redirigir a una página de error
        echo "Error al registrar: " . $e->getMessage();
    } finally {
        // Cerrar la conexión
        $conexion = null;
    }
} else {
    echo "No se enviaron todos los campos del formulario.<br>";
}
?>










