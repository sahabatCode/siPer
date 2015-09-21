<?php
$server   = "localhost";
$user     = "root";
$password = "1";
$database = "dbsiper";


mysql_connect($server,$user,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>
