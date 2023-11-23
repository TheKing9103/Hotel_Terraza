<?php
require_once "models/db.php";

// Función de autocarga de clases
spl_autoload_register(function ($class) {
    include 'controllers/' . $class . '.php';
});

// Validación y filtrado de parámetros de la URL
$controllerName = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'dashboard';
$controllerName = filter_var($controllerName, FILTER_SANITIZE_STRING);

// Instanciar el controlador
if (!isset($_REQUEST['c'])) {
    $controller = new Dashboard;
    $controller->main();
} else {
    $controller = new $controllerName;
    $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';

    // Validar si el método existe antes de llamarlo
    if (method_exists($controller, $action)) {
        call_user_func(array($controller, $action));
    } else {
        // Manejar caso en el que el método no existe
        echo "La acción '$action' no está definida en el controlador '$controllerName'.";
    }
}
?>



