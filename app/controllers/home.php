<?php
class home
{
    public function index()
    {
        require_once __DIR__ . '/../views/home/login.php';
    }
    public function about()
    {
        echo "day la trang gioi thieu";
    }
    public function login(){
        require_once __DIR__ . '/../views/home/login.php';
    }

}
?>
