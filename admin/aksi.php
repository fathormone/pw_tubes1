<?php
include "../include/koneksi.php";
$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='produk' and $act=='input') {
	$set = true;
$msg = "";
//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['foto']['type'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file	= $_FILES['foto']['name'];
$save_file =move_uploaded_file($lokasi_file,"../images/$nama_file");

if(empty($lokasi_file))
{
$set=false;
$msg= $msg.'Upload gagal, Anda Lupa Mengambil Gambar..';
}
else
{
//tentukan tipe file harus image 
if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
isset($save_file);
}
//replace di server 
if($save_file)
{
chmod("../images/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
	
		if(isset($_POST['submit'])){
			
			$nama	= $_POST['nama'];
			$merk	= $_POST['merk'];
			$spek	= $_POST['spesifikasi'];
			$pres   = $_POST['prestasi'];
			$in     = mysqli_query($koneksi,"INSERT INTO hasil_motor(foto_motor,nama_motor,merk_motor,spesifikasi_motor,prestasi_motor) VALUES('$nama_file','$nama','$merk','$spek','$pres')");
			if ($in) {
				header("location:server.php?module=produk&act");
			}

}
}
elseif
	($module=='produk' and $act=='edit') {
	
		$id = $_POST['id'];
		$set = true;
$msg = "";

//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['foto']['type'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file	= $_FILES['foto']['name'];
$save_file =move_uploaded_file($lokasi_file,"../images/$nama_file");

if(empty($lokasi_file))
{
isset($set);
}
else
{
//tentukan tipe file harus image 
	if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
$unlink=mysqli_query($koneksi, "select * from hasil_motor where id_motor='$id'");
$CekLink=mysqli_fetch_array($unlink); 
if(!empty($CekLink[1]))
{
unlink("../images/$CekLink[1]");
}
isset($save_file);
}

//replace di server 
if($save_file)
{
chmod("../images/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
	
		if(isset($_POST['submit']) && $set){


			$id = $_POST['id'];
			$nama	= $_POST['nama'];
			$merk	= $_POST['merk'];
			$spek	= $_POST['spesifikasi'];
			$pres   = $_POST['prestasi'];

			if(empty($lokasi_file))
{
mysqli_query($koneksi, "update hasil_motor set nama_motor='$nama', merk_motor='$merk', spesifikasi_motor='$spek', prestasi_motor='$pres' where id_motor='$id'");}

else{mysqli_query($koneksi, "update hasil_motor set foto_motor='$nama_file', nama_motor='$nama', merk_motor='$merk', spesifikasi_motor='$spek', prestasi_motor='$pres' where id_motor='$id'");
}
$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
content=\"1;URL=server.php?module=produk\">";
}
echo "$msg";
}
elseif
	($module=='produk' AND $act=='hapus') {
	$in = mysqli_query($koneksi,"DELETE FROM hasil_motor where
		id_motor='$_GET[id]'");
	if ($in){
	header("location:server.php?module=produk&act");
}
}

elseif
	($module=='pegawai' and $act=='input') {
		$set = true;
$msg = "";
//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['foto']['type'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file	= $_FILES['foto']['name'];
$save_file =move_uploaded_file($lokasi_file,"../images/$nama_file");

if(empty($lokasi_file))
{
$set=false;
$msg= $msg.'Upload gagal, Anda Lupa Mengambil Gambar..';
}
else
{
//tentukan tipe file harus image 
if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
isset($save_file);
}
//replace di server 
if($save_file)
{
chmod("../images/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
	
		if(isset($_POST['submit'])){
			
			$nama	= $_POST['nama'];
			$ttl	= $_POST['ttl'];
			$alamat	= $_POST['alamat'];
			$jabatan= $_POST['jabatan'];
			$in     = mysqli_query($koneksi,"INSERT INTO pegawai_bengkel(foto_pegawai,nama_pegawai,ttl_pegawai,alamat_pegawai,jabatan_pegawai) VALUES('$nama_file','$nama','$ttl','$alamat','$jabatan')");
			if ($in) {
				header("location:server.php?module=pegawai&act");
			}

}
}
elseif
	($module=='pegawai' and $act=='edit') {
		$id = $_POST['id'];
		$set = true;
$msg = "";

//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['foto']['type'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file	= $_FILES['foto']['name'];
$save_file =move_uploaded_file($lokasi_file,"../images/$nama_file");

if(empty($lokasi_file))
{
isset($set);
}
else
{
//tentukan tipe file harus image 
	if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
$unlink=mysqli_query($koneksi, "select * from pegawai_bengkel where id_pegawai='$id'");
$CekLink=mysqli_fetch_array($unlink); 
if(!empty($CekLink[1]))
{
unlink("../images/$CekLink[1]");
}
isset($save_file);
}

//replace di server 
if($save_file)
{
chmod("../images/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
	
		if(isset($_POST['submit']) && $set){


			$id = $_POST['id'];
			$nama	= $_POST['nama'];
			$ttl	= $_POST['ttl'];
			$alamat	= $_POST['alamat'];
			$jabatan= $_POST['jabatan'];

			if(empty($lokasi_file))
{
mysqli_query($koneksi, "update pegawai_bengkel set nama_pegawai='$nama', ttl_pegawai='$ttl', alamat_pegawai='$alamat', jabatan_pegawai='$jabatan' where id_pegawai='$id'");}

else{mysqli_query($koneksi, "update pegawai_bengkel set foto_pegawai='$nama_file', nama_pegawai='$nama', ttl_pegawai='$ttl', alamat_pegawai='$alamat', jabatan_pegawai='$jabatan' where id_pegawai='$id'");
}
$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
content=\"1;URL=server.php?module=pegawai\">";
}
echo "$msg";
}

elseif
	($module=='pegawai' AND $act=='hapus') {
	
	$in = mysqli_query($koneksi,"DELETE FROM pegawai_bengkel where
		id_pegawai='$_GET[id]'");
	if ($in){
	header("location:server.php?module=pegawai&act");
}
}

elseif
	($module=='profil' and $act=='editprofil') {
	
		if(isset($_POST['submit'])){
			
			$id 	= $_POST['id'];
			$nama	= $_POST['nama'];
			$tgl	= $_POST['tanggalberdiri'];
			$alamat	= $_POST['alamat'];
			$fas  	= $_POST['fasilitas'];
			$kerj	= $_POST['kerjasama'];
			
			$in     = mysqli_query($koneksi,"UPDATE profile_bengkel SET nama_pemilik='$nama', tanggal_berdiri='$tgl', alamat='$alamat', fasilitas='$fas', kerjasama='$kerj' where id_profile='$id'");
			if ($in) {
				header("location:server.php?module=profil&act");
}
}
}

?>