<?php 
// TODO 1: Khởi động session
session_start();

// TODO 2: Kiểm tra xem SESSION lưu tên đăng nhập có tồn tại không
if (isset($_SESSION['username'])) {

    // TODO 3: Nếu tồn tại, lấy username từ SESSION
    $loggedInUser = $_SESSION['username'];

    // TODO 4: In ra lời chào mừng
    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";

    // TODO 5: Link "Đăng xuất" tạm thời (chỉ quay về login.html)
    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>';

} else {
    // TODO 6: Nếu chưa đăng nhập → quay về trang login
    header('Location: login.html');
    exit;
}
?>
