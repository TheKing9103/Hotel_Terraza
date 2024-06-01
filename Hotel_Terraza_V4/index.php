<?php
ob_start();
    require_once "models/DataBase.php";
    if (!isset($_REQUEST['c'])) {
        require_once "Controllers/Landing.php";
        $controller = new Landing;
        $controller->main();
    } else {
        $controller = $_REQUEST['c'];
        require_once "Controllers/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }
    ob_end_flush();      
?>