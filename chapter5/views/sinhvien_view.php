<?php 
?> 
<!DOCTYPE html> 
<html lang="vi"> 
<head> 
    <meta charset="UTF-8"> 
    <title>PHT Chương 5 - MVC</title> 
    <style> 
        table { width: 100%; border-collapse: collapse; } 
        th, td { border: 1px solid #ddd; padding: 8px; } 
        th { background-color: #f2f2f2; } 
    </style> 
</head> 
<body> 

    <h2>Thêm Sinh Viên Mới</h2> 
    <form action="index.php" method="POST">
        <input type="text" name="ten" placeholder="Tên sinh viên" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="btn_them">Thêm</button>
    </form>

    <hr>

    <h2>Danh Sách Sinh Viên</h2>

    <table> 
        <tr> 
            <th>ID</th> 
            <th>Tên Sinh Viên</th> 
            <th>Email</th> 
            <th>Ngày Tạo</th> 
        </tr> 

        <?php 
        // TODO 4: Vòng lặp foreach để duyệt $danh_sach_sv
        if (!empty($danh_sach_sv)) {
            foreach ($danh_sach_sv as $sv) {

                // TODO 5: Xuất từng dòng sinh viên
                echo "<tr>";
                echo "<td>" . htmlspecialchars($sv['id']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['ten_sinh_vien']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['email']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['ngay_tao']) . "</td>";
                echo "</tr>";
            }
        }
        ?> 
    </table> 
</body> 
</html>
