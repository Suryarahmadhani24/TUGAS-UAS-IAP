<?php

$data = file_get_contents('coba.json');
$tbl_mahasiswa = json_decode($data, true);

var_dump($tbl_mahasiswa);

?>