<?php
$file_json = file_get_contents("karyawan.json");
$data_karyawan = json_decode($file_json, true);
$data_karyawan = array_values($data_karyawan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=300px, initial-scale=1.0">
    <title>Tabel Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3>Tabel Karyawan</h3>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Golongan</th>
            <th>Alamat</th>
        </tr>
        <?php foreach ($data_karyawan as $karyawan) : ?>
            <tr>
                <?php foreach ($karyawan as $data) : ?>
                    <?= "<td>$data</td>"; ?>
                <?php endforeach; ?>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>