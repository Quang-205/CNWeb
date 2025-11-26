<?php 
// TODO 1: Khởi động session
session_start();

// TODO 2: Kiểm tra xem người dùng đã nhấn nút "Đăng nhập" chưa
if (isset($_POST['username']) && isset($_POST['password'])) {

    // TODO 3: Lấy dữ liệu username và password từ POST
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // TODO 4: Kiểm tra logic đăng nhập
    if ($user == 'quang205' && $pass == '123') {

        // TODO 5: Lưu username vào SESSION
        $_SESSION['username'] = $user;

        // TODO 6: Chuyển hướng sang trang chào mừng
        header('Location: welcome.php');
        exit;
    
    } else {
        // Sai thông tin → quay lại login kèm lỗi
        header('Location: login.html?error=1');
        exit;
    }

} else {
    // TODO 7: Truy cập trực tiếp file này → đá về login.html
    header('Location: login.html');
    exit;
}
?>
