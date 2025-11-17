<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>PHT Chương 2 - PHP Căn Bản</title>
</head>
<body>
    <h1>Kết quả PHP Căn Bản</h1>

    <?php
    
    
    // TODO 1: Khai báo 3 biến
    $ho_ten = "Vũ Vă Quảng";
    $diem_tb = 7.5;
    $co_di_hoc_chuyen_can = true;

    // TODO 2: In ra thông tin sinh viên
    echo "Họ tên: " . $ho_ten . "<br>";
    echo "Điểm trung bình: " . $diem_tb . "<br>";
    echo "Đi học chuyên cần: " . ($co_di_hoc_chuyen_can ? "Có" : "Không") . "<br><br>";

    // TODO 3: Viết cấu trúc IF/ELSE IF/ELSE (2.2)
    echo "Kết quả xếp loại: ";
    if ($diem_tb >= 8.5 && $co_di_hoc_chuyen_can == true) {
        echo " Giỏi<br>";
    } else if ($diem_tb >= 6.5 && $co_di_hoc_chuyen_can == true) {
        echo " Khá<br>";
    } else if ($diem_tb >= 5.0 && $co_di_hoc_chuyen_can == true) {
        echo " Trung bình<br>";
    } else {
        echo " Yếu (Cần cố gắng thêm!)<br>";
    }
    echo "<br>";

    // TODO 4: Viết 1 hàm đơn giản (2.3)
    function chaoMung() {
        echo "Chúc mừng bạn đã hoàn thành PHT Chương 2!<br>";
    }

    // TODO 5: Gọi hàm bạn vừa tạo
    chaoMung();
    echo "<br>";
    ?>
</body>
</html>