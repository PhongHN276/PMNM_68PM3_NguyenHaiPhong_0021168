<?php
    require_once '../app/core/App.php';
    $app = new App(); 
    require_once '../app/middleware.php';
    $middleware = new middleware();
    $middleware->checklogin();
    $app = new App();
?>