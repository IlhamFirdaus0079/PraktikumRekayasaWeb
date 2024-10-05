<?php
// Membuat array
$array_data = [
    "nama" => "Kurt Cobain",
    "band" => "Nirvana",
    "genre" => "Grunge",
    "album" => ["Nevermind", "In Utero"]
];

// Mengubah array menjadi JSON
$json_data = json_encode($array_data);

// Menampilkan JSON
echo $json_data;
?>