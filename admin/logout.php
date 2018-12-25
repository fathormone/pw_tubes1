<?php 
session_start();
include "../include/koneksi.php";
if (empty (empty($_SESSION['namauser'])))

{
exit ("<script>window.alert('Berhasil logout.');
	window.location='index.php';
	</script>");
}
session_destroy();
exit("<script>window.alert('Terima Kasih.');
	window.location='index.php';</script>");
?>