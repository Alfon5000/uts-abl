<?php
$file_json = file_get_contents("karyawan.json");
$data_karyawan = json_decode($file_json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=280px, initial-scale=1.0">
    <title>Tabel Karyawan</title>
    <style>
        h2 {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        table {
            margin: auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            background-color: gray;
        }

        tr,
        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h2>Tabel Karyawan</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Golongan</th>
            <th>Alamat</th>
        </tr>
        <?php foreach ($data_karyawan as $karyawan) : ?>
            <?php foreach ($karyawan as $data) : ?>
                <tr>
                    <?php foreach ($data as $dt) : ?>
                        <?= "<td>$dt</td>"; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>