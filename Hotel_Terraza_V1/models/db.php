<?php
class Database {
    public static function connection() {
        try {
            $hostname = "localhost";
            $port = "3306";
            $database = "hotel";
            $username = "root";
            $password = ""; // Deja esto como una cadena vacía

            $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            // Manejar el error de conexión de alguna manera (puede ser un mensaje de error o log)
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}
?>



