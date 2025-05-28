<?php

// // Memberitahu browser bahwa output adalah JSON
 header('Content-Type: application/json');

// // Array data mahasiswa
// $mahasiswa = [
//     [
//         "nama" => "Surya Rahmadhani Batubara",
//         "nim" => "2217020019",
//         "email" => "suryarahmadhanibb@gmail.com"
//     ],
//     [
//         "nama" => "Surya",
//         "nim" => "2217020019",
//         "email" => "suryabb@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', 
'root' );
$db = $dbh->prepare('SELECT * FROM tbl_mahasiswa');
$db->execute();
$tbl_mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
// Encode data ke JSON 
$data = json_encode ($tbl_mahasiswa);
echo $data

?>
