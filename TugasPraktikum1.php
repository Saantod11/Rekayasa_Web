<?php
echo "<h2>Tugas Rekayasa WEB</h2>";

// ===== ENCODE ARRAY KE JSON =====
echo "<h3>1. Encode Array ke JSON</h3>";

// Array asosiatif
$data_diri = array(
    "nama" => "Citra",
    "email" => "citra@example.com",
    "telepon" => "08123456789"
);

$json_diri = json_encode($data_diri);
echo "Array ke JSON: " . $json_diri . "<br>";


// ===== DECODE JSON KE PHP =====
echo "<h3>2. Decode JSON ke PHP</h3>";

$json_produk = '{
    "id": 101,
    "nama": "Laptop ASUS",
    "harga": 10000000,
    "spesifikasi": {
        "processor": "Intel i5",
        "ram": "16GB",
        "storage": "512GB SSD"
    },
    "stok": true
}';

// Decode ke array
$array_produk = json_decode($json_produk, true);
echo "<h4>Mengakses sebagai Array:</h4>";
echo "ID : " . $array_produk["id"] . "<br>";
echo "Nama : " . $array_produk["nama"] . "<br>";
echo "Harga : Rp " . number_format($array_produk["harga"], 0, ',', '.') . "<br>";
echo "Processor : " . $array_produk["spesifikasi"]["processor"] . "<br>";
echo "Ram : " . $array_produk["spesifikasi"]["ram"] . "<br>";
echo "Storage : " . $array_produk["spesifikasi"]["storage"] . "<br>";
echo "Stok : " . ($array_produk["stok"] ? "Tersedia" : "Habis") . "<br>";

// Decode ke object
$object_produk = json_decode($json_produk);
echo "<h4>Mengakses sebagai Object:</h4>";
echo "ID : " . $object_produk->id . "<br>";
echo "Nama : " . $object_produk->nama . "<br>";
echo "Harga : Rp " . number_format($object_produk->harga, 0, ',', '.') . "<br>";
echo "Processor: " . $object_produk->spesifikasi->processor . "<br>";
echo "Ram : " . $object_produk->spesifikasi->ram . "<br>";
echo "Storage : " . $object_produk->spesifikasi->storage . "<br>";
echo "Stok : " . ($object_produk->stok ? "Tersedia" : "Habis") . "<br>";

?>