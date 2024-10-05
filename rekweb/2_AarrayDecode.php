<?php
// Variabel JSON
$json_data = '{"nama": "Kurt Cobain", "band": "Nirvana", "genre": "Grunge", "album": ["Nevermind", "In Utero"]}';

// Decode JSON menjadi PHP Object
$object_data = json_decode($json_data);

// Akses nilai dalam Object
echo "Nama (Object): " . $object_data->nama . "\n"; // Output: Kurt Cobain
echo "Band (Object): " . $object_data->band . "\n"; // Output: Nirvana

// Decode JSON menjadi PHP Array
$array_data = json_decode($json_data, true);

// Akses nilai dalam Array
echo "Nama (Array): " . $array_data["nama"] . "\n"; // Output: Kurt Cobain
echo "Band (Array): " . $array_data["band"] . "\n"; // Output: Nirvana
?>