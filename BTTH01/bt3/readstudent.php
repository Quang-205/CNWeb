<?php
$csvFile = "student.csv";

if (!file_exists($csvFile)) {
    die("<h3>⚠️ File CSV không tồn tại!</h3>");
}

$rows = [];
$headers = [];

if (($handle = fopen($csvFile, "r")) !== FALSE) {

    $isHeader = true;

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        if ($isHeader) {
            $headers = $data;
            $isHeader = false;
            continue;
        }
        $rows[] = array_combine($headers, $data);
    }

    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên </title>

    <style>
        table {
            border-collapse: collapse;
            width: 95%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 10px;
        }
        th {
            background: #ddd;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Danh sách sinh viên</h2>

    <table>
        <tr>
            <th>ID</th>
            <?php foreach ($headers as $h): ?>
                <th><?= htmlspecialchars($h) ?></th>
            <?php endforeach; ?>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= $id++ ?></td>
                <?php foreach ($headers as $h): ?>
                    <td><?= htmlspecialchars($row[$h] ?? "") ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
