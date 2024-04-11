<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MONITORING SUHU DAN KELEMBAPAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="body">
	<table>
		<tr>
			<td><img class="image" src="https://yt3.ggpht.com/ytc/AKedOLT39fyW4yKNvheWfqKrpqZXtgqQKFWoq31C4wNa=s900-c-k-c0x00ffffff-no-rj"></td>
			<td>
				<font style="font-size: 30px">Praktikum Minggu Ke-4 Matakuliah Interaksi Manusia Mesin</font>
			</td>
			<td>
		</tr>
		</h1>
	</table>
	<div class="bungkus">
		<h1 class="h1" align="center">ESP8266 MONITORING SUHU DAN KELEMBAPAN
		</h1>
		<?php
		include "koneksi.php";
		$query = mysqli_query($koneksi, "SELECT * FROM tbmonitor 
			ORDER BY id DESC LIMIT 1");
		while ($data = mysqli_fetch_array($query)) {
		?>
			<div class="container">
				<div class="kotak">
					<h2 class="h2">SUHU</h2>
					<div class="nilai">
						<?php echo $data['suhu']; ?><font size="10">°C</font>
					</div>
				</div>
				<div class="kotak">
					<h2 class="h2">KELEMBAPAN</h2>
					<div class="nilai">
						<?php echo $data['kelembapan']; ?><font size="10">%</font>
					</div>
				</div>
				<div class="tanggal">
					<h2 class="h2">TANGGAL</h2>
					<font size="5" class="hantu" style="margin-bottom : 50px;"><?php echo $data['tanggal']; ?></font>
				</div>
				<div class="Waktu">
					<h2 class="h2">WAKTU</h2>
					<font size="5" class="hantu2" style="margin-bottom : 50px;"><?php echo $data['waktu']; ?></font>
				</div>
				<br>
				<a href="hapus.php" class="tombol" onclick="alert('Berhasil Di Reset!');">Reset</a>
				</<br>
				<style>
					.tombol {
						background-color: red;
						border: 2px solid black;
						color: white;
						padding: 15px 32px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 14px;
						margin: 4px 2px;
						cursor: pointer;
						border-radius: 8px;
					}
				</style>
			</div>
		<?php } ?>
	</div>
</body>

</html>