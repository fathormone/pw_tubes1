<?php 
include "../include/koneksi.php";
$login =  mysqli_query($koneksi, "select * from admin where username ='$_POST[user]' and password='$_POST[pass]'");
if (mysqli_num_rows($login)){
	$data=mysqli_fetch_array($login);
	session_start();
	if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$_SESSION['namauser']=$data['username'];
	$_SESSION['passuser']=$data['password'];
	header("location:server.php?module=dashboard");
}
else
{
die("Wrong Captcha Code!");
}
	
}else{
	print "<script>
	alert ('Maaf username atau password Anda salah!');
	location.href = 'index.php';
	</script>";
}
?>