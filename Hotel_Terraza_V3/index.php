<?php
    require_once "models/DataBase.php";
    if (!isset($_REQUEST['c'])) {
        require_once "controllers/reserva.php";
        $controller = new reserva;
        $controller->main();
    } else {
        $controller = $_REQUEST['c'];
        require_once "controllers/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }
?>