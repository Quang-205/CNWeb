<?php 
// Tệp Controller là "não" của ứng dụng 

// TODO 6: Import Model
require_once 'models/SinhVienModel.php';

// === THIẾT LẬP KẾT NỐI PDO === 
$host = '127.0.0.1';
$dbname = 'cse485_web';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
// === KẾT THÚC KẾT NỐI PDO ===


// === LOGIC CỦA CONTROLLER ===

// TODO 8: Kiểm tra hành động POST để thêm sinh viên
if (isset($_POST['ten']) && isset($_POST['email'])) {

    // TODO 9: Lấy dữ liệu từ form
    $ten = $_POST['ten'];
    $email = $_POST['email'];

    // TODO 10: Gọi Model để thêm sinh viên
    addSinhVien($pdo, $ten, $email);

    // TODO 11: Redirect để load lại trang
    header("Location: index.php");
    exit;
}

// TODO 12: Lấy danh sách sinh viên từ Model
$danh_sach_sv = getAllSinhVien($pdo);

// TODO 13: Import View
include 'views/sinhvien_view.php';
?>
