<?php
include "flowers.php";

$id = $_GET['id'];
$item = $flowers[$id];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_FILES['image']['name'] != "") {
        $img = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $img);
    } else {
        $img = $item['image'];
    }

    $flowers[$id] = [
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "image" => $img
    ];

    file_put_contents("flowers.php", "<?php\n\$flowers = " . var_export($flowers, true) . ";\n?>");

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sửa hoa</title>

<style>
<?php /* dùng y hệt css của add.php để đồng bộ */ ?>
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
    background: #38a3a5;
    border: none;
    color: white;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
}
button:hover{
    background: #21897e;
}
img{ width: 100%; border-radius: 10px; margin-top: 10px; }
h2{ text-align: center; color: #00917c; font-size: 30px; }
</style>

</head>
<body>

<form method="POST" enctype="multipart/form-data">
<h2>✏ Sửa hoa</h2>

<label>Tên hoa:</label>
<input type="text" name="name" value="<?= $item['name'] ?>" required>

<label>Mô tả:</label>
<textarea name="description" rows="5"><?= $item['description'] ?></textarea>

<label>Ảnh hiện tại:</label>
<img src="images/<?= $item['image'] ?>">

<label>Chọn ảnh mới (nếu muốn thay):</label>
<input type="file" name="image">

<button>Cập nhật</button>
</form>

</body>
</html>
