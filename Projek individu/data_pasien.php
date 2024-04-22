<?php
// 1. sertakan koneksi database
require_once 'dbkoneksi.php';
// 2. definisikan query
$sql = "SELECT * FROM pasien";
// 3. jalankan query
$query =$dbh->query( $sql);