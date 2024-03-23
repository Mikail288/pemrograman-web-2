<?php
if( !isset($_GET["submit"])    ){
    header("Location: index.php");
    exit;
}

include_once 'layouts/header.php';

require_once 'model.php';

$proses = $_GET["submit"];
$nama = $_GET["nama"];
$mata_kuliah = $_GET["matakuliah"];
$nilai_uts = $_GET["uts"];
$nilai_uas = $_GET["uas"];
$nilai_tugas = $_GET["tugas"];
$nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;


echo 'Nama Siswa : '  . $nama;
echo '<br> Mata Kuliah : ' . $mata_kuliah;
echo '<br> Nilai UTS : ' . $nilai_uts;
echo '<br> Nilai UAS : ' . $nilai_uas;
echo '<br> Nilai Tugas : ' . $nilai_tugas;

echo '<br> Nilai Akhir : ' . $nilai_akhir;
echo '<br> Anda dinyatakan : ' . kelulusan($nilai_akhir);
echo '<br> Grade : ' . grade($nilai_akhir);




?>