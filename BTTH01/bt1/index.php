<?php include "flowers.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Danh sách hoa</title>
<link rel="stylesheet" href="style.css">

<style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}


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


body{
    background: #f5edff;
    padding: 35px 30px;
}


h1{
    text-align: center;
    font-size: 40px;
    margin-top: 20px;
    margin-bottom: 35px;
    color: #5a189a;
    font-weight: 700;
}


.grid{
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
    gap: 30px;
}


.card{
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0px 4px 18px rgba(0,0,0,0.1);
    transition: 0.25s ease;
}

.card:hover{
    transform: translateY(-6px);
    box-shadow: 0px 10px 28px rgba(0,0,0,0.18);
}

.card img{
    width: 100%;
    height: 200px;
    object-fit: cover;
}


.card-content{
    padding: 20px;
}

.card h3{
    font-size: 22px;
    margin-bottom: 12px;
    color: #5a189a;
    font-weight: 650;
}

.card p{
    font-size: 15px;
    color: #333;
    line-height: 1.5;
}
</style>

</head>

<body>

<nav class="navbar">
    <div class="nav-left">Flower Gallery</div>
    <div class="nav-right">
        <a href="index.php">Trang chủ</a>
        <a href="admin.php" class="admin-btn">Admin</a>
    </div>
</nav>

<h1>🌸 Danh sách hoa Xuân – Hè 🌸</h1>

<div class="grid">
    <?php foreach ($flowers as $item): ?>
    <div class="card">
        <img src="images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
        <div class="card-content">
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['description'] ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>
