<?php
include "flowers.php";

$id = $_GET['id'];

unset($flowers[$id]);

$flowers = array_values($flowers);

file_put_contents("flowers.php", "<?php\n\$flowers = " . var_export($flowers, true) . ";\n?>");

header("Location: admin.php");
exit();
?>