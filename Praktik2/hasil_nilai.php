<?php
// $proses = $_GET['proses'];
$nama = $_GET['nama'];
$matkul = $_GET[ 'matkul' ];
$nilai_uts = $_GET[ 'nilai_uts' ];
$nilai_uas = $_GET[ 'nilai_uas' ];
$nilai_tugas = $_GET[ 'nilai_tugas' ];

//buat total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$predikat;

//buat perhitungan IF untuk mencari grade
if ( $total_nilai >= 85 ) {
    $grade = "A";
}else if ( $total_nilai >=70 && $total_nilai < 85 ) {
    $grade = "B";
}else if ( $total_nilai >=56 && $total_nilai < 70 ) {
    $grade = "C";
}else if ( $total_nilai >=36 && $total_nilai < 66 ) {
    $grade = "D";
}else if ( $total_nilai >=0 && $total_nilai < 36 ) {
    $grade = "E";
}else {
    $grade = "I";
}

$_tes

//buat perhitungan switchcase untuk mencari predikat
switch($grade){
    case "A":
        $predikat = "Sangat memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case  "D":
        $predikat = "Kurang";
        break;
    case  "E":
        $predikat = "sangat kurang";
        break;
    default:
        $predikat = "Tidak ada";
        break;
}

//output
    // echo 'proses : '.$proses;
    echo '<br/>Nama :  '. $nama;
    echo '<br/>Mata Kuliah :'. $matkul;
    echo '<br/>Nilai UTS :  ' . $nilai_uts;
    echo '<br/>Nilai UAS : '. $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '. $nilai_tugas;
    echo '<br/>Grade : '. $grade;
    echo '<br/>Predikat : '. $predikat;
?>