<?php
$server = "localhost";
$username = "id20055331_dbmonitor";
$password = "um4%*V%8wU3Ac<{i";
$database = "id20055331_dht11system";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_error()) {
	echo "Database Gagal Terhubung ... ";
}
