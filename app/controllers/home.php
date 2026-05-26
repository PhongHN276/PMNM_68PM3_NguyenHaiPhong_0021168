<?php
class home {
    function index() {
        echo "Đây là trang chủ";
        require_once '../app/views/home/index.php';
    }

    public function login() {
        require_once '../app/views/home/login.php';
    }
}
?>
