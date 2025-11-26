<?php
include "flowers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new = [
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "image" => $_FILES['image']['name']
    ];

    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
    $flowers[] = $new;

    file_put_contents("flowers.php", "<?php\n\$flowers = " . var_export($flowers, true) . ";\n?>");

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thêm hoa</title>

<style>
body{ font-family: Segoe UI; background: #faf5ff; padding: 40px; }
form{
    background: white;
    width: 420px;
    margin: auto;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
}
input, textarea{
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border-radius: 10px;
    border: 1px solid #bbb;
}
button{
    margin-top: 15px;
    width: 100%;
    padding: 12px;
    background: #7b2cbf;
    border: none;
    color: white;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
}
button:hover{
    background: #5a189a;
}
h2{
    text-align: center;
    color: #5a189a;
    font-size: 30px;
}
</style>
</head>

<body>
<form method="POST" enctype="multipart/form-data">
<h2>➕ Thêm hoa mới</h2>

<label>Tên hoa:</label>
<input type="text" name="name" required>

<label>Mô tả:</label>
<textarea name="description" rows="5" required></textarea>

<label>Ảnh:</label>
<input type="file" name="image" required>

<button>Thêm</button>
</form>
</body>
</html>
