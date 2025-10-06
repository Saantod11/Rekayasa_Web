<?php
// tampilWisata.php

// Ambil data JSON dari file getWisata.php
$json_data = file_get_contents("http://localhost/prakrekayasaweb/pertemuan2/getWisata.php");

// Decode JSON ke array asosiatif
$wisata = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            background-color: greenyellow;
            margin: left;
            width: 200px;
        }
    </style>
</head>
<body>
    <h2>Tugas: <br>
        Tabel Wisata Kota
    </h2>
    
    <table>
        <tr>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
        </tr>
        <?php
        // Loop data wisata untuk ditampilkan ke tabel
        foreach ($wisata as $item) {
            echo "<tr>";
            echo "<td>" . $item['kota'] . "</td>";
            echo "<td>" . $item['landmark'] . "</td>";
            echo "<td>" . $item['tarif'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
