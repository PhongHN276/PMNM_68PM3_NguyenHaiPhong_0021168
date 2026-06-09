<?php
require_once '../app/core/Controller.php';
class sinhvien extends Controller{
    public function index($limit = 5, $offset = 0, $search = ''){
    
        $sinhvienModel = $this->model('sinhvienModel');
        $result = $sinhvienModel -> paging($limit, $offset, $search);
        $sinhvien = $result['sinhvien'];
        $totalPage = $result['totalPage'];
        $this -> view('sinhvien/index', ['sinhvien' => $sinhvien, 'totalPage' => $totalPage], 'Danh sách sinh viên');

    }
    public function create(){
        require_once __DIR__ . '/../views/sinhvien/create.php';
    }

    public function store(){
        
        $hoten = $_POST['hoten'];
        $gioitinh = $_POST['gioitinh'];
        $mssv = $_POST['mssv'];
        echo "Họ tên: " . $hoten . "<br>";
        echo "Giới tính: " . $gioitinh . "<br>";
        echo "Mã số sinh viên: " . $mssv . "<br>";
        $result = $sinhvienModel = $this->model('sinhvienModel')->create($hoten, $gioitinh, $mssv);
        if($result){
            echo "Thêm sinh viên thành công!";
        } else {
            echo "Thêm sinh viên thất bại!";
        }
    }

 
}

?>