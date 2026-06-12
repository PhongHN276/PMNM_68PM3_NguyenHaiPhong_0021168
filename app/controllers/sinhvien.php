<?php
require_once '../app/core/Controller.php';

class sinhvien extends Controller {
    public function index($limit = 5, $offset = 0, $search = '') {
        $sinhvienModel = $this->model('sinhvienModel');
        $result = $sinhvienModel->paging((int) $limit, (int) $offset, $search);

        $this->view(
            'sinhvien/home/index',
            [
                'sinhvien' => $result['sinhvien'],
                'totalPage' => $result['totalPage']
            ],
            'Danh sách sinh viên'
        );
    }

    public function create() {
        require_once __DIR__ . '/../views/sinhvien/create.php';
    }

    public function store() {
        $hoten = $_POST['hoten'] ?? '';
        $gioitinh = $_POST['gioitinh'] ?? '';
        $mssv = $_POST['mssv'] ?? '';

        $result = $this->model('sinhvienModel')->create($hoten, $gioitinh, $mssv);
        if ($result) {
            header('Location: /sinhvien/index');
            exit();
        }

        echo "Thêm sinh viên thất bại!";
    }
}
