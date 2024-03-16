<?php 
    session_start();
    define('__DIR_ROOT', __DIR__);
    require_once "./mvc/Bridge.php";
    $app = new App();
?>