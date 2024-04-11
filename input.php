<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
</head>

<body>
	<?php
	error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
	include('koneksi.php');

	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("H:i:s");
	$tanggal = date("d:F:Y");
	$suhu = $_GET['suhu'];
	$kelembapan = $_GET['kelembapan'];

	$kirim = mysqli_query($koneksi, "INSERT INTO tbmonitor
		(waktu,tanggal,suhu,kelembapan) VALUES ('$waktu','$tanggal','$suhu','$kelembapan')");
	if ($kirim) {
		echo "Data Berhasil Di Inputkan ... ";
	} else {
		echo "Gagal Di Inputkan ...";
	}
	?>
</body>

</html>