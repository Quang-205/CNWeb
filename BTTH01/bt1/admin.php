<?php include "flowers.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Quản lý danh sách hoa</title>

<style>
body{
    background: #f5f3ff;
    padding: 40px;
    font-family: "Segoe UI";
}
h1{
    text-align: center;
    margin-bottom: 25px;
    font-size: 36px;
    color: #5a189a;
    font-weight: 700;
}
.table-box{
    background: white;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
}
table{
    width: 100%;
    border-collapse: collapse;
}
th, td{
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
}
th{
    background: #e5dbff;
    color: #4a148c;
}
td img{
    width: 90px;
    height: 65px;
    object-fit: cover;
    border-radius: 8px;
}
.action a{
    margin-right: 10px;
    text-decoration: none;
    padding: 6px 10px;
    border-radius: 6px;
    color: white;
}
.edit{
    background: #38a3a5;
}
.delete{
    background: #d00000;
}
.add-btn{
    display: inline-block;
    background: #7b2cbf;
    color: white;
    padding: 12px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    margin-bottom: 20px;
}
.add-btn:hover{
    background: #5a189a;
}
/* NAVBAR */
.navbar{
    background: #7b2cbf;
    padding: 14px 25px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
}

.nav-left{
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
}

.nav-right a{
    color: white;
    text-decoration: none;
    font-weight: 500;
    margin-left: 20px;
    padding: 6px 12px;
    border-radius: 6px;
    transition: 0.25s;
}

.nav-right a:hover{
    background: rgba(255,255,255,0.2);
}

.admin-btn{
    background: #c9184a;
}

.admin-btn:hover{
    background: #a4133c;
}
</style>

</head>
<body>
<nav class="navbar">
    <div class="nav-left">Flower Gallery</div>
    <div class="nav-right">
        <a href="admin.php">Admin</a>
        <a href="index.php" class="admin-btn">Trang chủ</a>
    </div>
</nav>

<h1>Quản lý danh sách hoa</h1>

<a class="add-btn" href="add.php">➕ Thêm hoa mới</a>

<div class="table-box">
<table>
<tr>
    <th>STT</th>
    <th>Tên hoa</th>
    <th>Ảnh</th>
    <th>Mô tả</th>
    <th>Hành động</th>
</tr>

<?php foreach ($flowers as $i => $f): ?>
<tr>
    <td><?= $i + 1 ?></td>
    <td><?= $f['name'] ?></td>
    <td><img src="images/<?= $f['image'] ?>"></td>
    <td><?= $f['description'] ?></td>
    <td class="action">
        <a class="edit" href="edit.php?id=<?= $i ?>">Sửa</a>
        <a class="delete" href="delete.php?id=<?= $i ?>" onclick="return confirm('Bạn có chắc muốn xóa hoa này?')">Xóa</a>

    </td>
</tr>
<?php endforeach; ?>

</table>
</div>

</body>
</html>
