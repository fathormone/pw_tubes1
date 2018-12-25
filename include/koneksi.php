<?php 
$server = "localhost";
$username = "root";
$password = "";
$db_name = "bengkel_db"; 

$koneksi = mysqli_connect($server,$username,$password) or die (mysqli_error());
$database = mysqli_select_db($koneksi,$db_name) or die ("Database tidak ada.");

?>