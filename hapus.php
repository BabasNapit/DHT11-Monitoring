<?php
session_start();
include 'koneksi.php';
$del = mysqli_query($koneksi, "TRUNCATE TABLE tbmonitor");
$sql = mysqli_query($koneksi, "INSERT INTO tbmonitor (id, waktu, tanggal, suhu, kelembapan)
VALUES ('0', '00:00:00', '00-00-0000', '0', '0')");

header("location:index.php");
