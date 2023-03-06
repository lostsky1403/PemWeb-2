<?php
$nama = $_GET['Nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['UTS'];
$uas = $_GET['UAS'];
$praktikum = $_GET['Praktikum'];

if (isset($_GET['submit'])) {
    $nama = $_GET['Nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['UTS'];
    $uas = $_GET['UAS'];
    $praktikum = $_GET['Praktikum'];

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Praktikum: $praktikum <br>";
} else {
    echo "Tidak ada data";
}