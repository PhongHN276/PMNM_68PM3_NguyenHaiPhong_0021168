<?php
    $scriptName = $_SERVER['SCRIPT_NAME']; // e.g. /btvnpmnm/public/index.php
    $baseDir = dirname($scriptName); // e.g. /btvnpmnm/public
    if ($baseDir === '/' || $baseDir === '\\') {
        $baseDir = '';
    }
    define('BASE_URL', $baseDir);

    function url($path = '') {
        return BASE_URL . '/' . ltrim($path, '/');
    }
    require_once '../app/middleware.php';
    $middleware = new Middleware();
    $middleware->checklogin();
    $app = new App();
?>