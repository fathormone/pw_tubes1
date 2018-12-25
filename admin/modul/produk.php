<?php
include '../include/koneksi.php';
switch (@$_GET['act']) {
default:
?>

<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2><strong class="card-title">Daftar Produk</strong></h2>
                            </div>
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Foto</th>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Spesifikasi</th>
                                            <th>Prestasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$tampil=mysqli_query($koneksi, "select * from hasil_motor order by id_motor");
$no=1;
while 
    ($r=mysqli_fetch_array($tampil)){


?>
                                        <tr>
                                            
                                            <td class="serial"><?php echo $no++?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img width="50" weight="50" src="<?php echo '../images/'.$r['foto_motor'];?>" alt=""></a>
                                                </div>
                                            </td>
                                            <td><span class="nama"><?php echo $r['nama_motor'];?></span></td>
                                            <td><span class="merk"><?php echo $r['merk_motor'];?></span> </td>
                                            <td><span class="spesifikasi"><?php echo $r['spesifikasi_motor'];?></span> </td>
                                            <td><span class="prestasi"><?php echo $r['prestasi_motor'];?></span></td>
                                            <td>
                                            <form method=post action='?module=produk&act=editproduk&id=<?php  echo $r['id_motor'];   ?>'>
                                                <input class='btn btn-success' type=submit value='Edit'>
                                            </form>
                                            <br>
                                            <form method=post action='aksi.php?module=produk&act=hapus&id=<?php echo $r['id_motor']; ?>'>
                                                <input class='btn btn-danger' type=submit value='Hapus'>
                                            </form>

                                            </td>
                                        
                                            
                                        </tr>
                                        <?php   } ?>
                                        
                                    </tbody>
                                </table>
                                <form method=post action='?module=produk&act=tambahproduk'>
                                <input class='btn btn-primary' type=submit value='Tambah Produk Motor'>
                            </form>
               
               
                        </div>
                    </div>        
<?php
break;
case "tambahproduk":
echo 
"<br></br>
<h2 class='card-title' style='margin-left:2%'><b>Tambah Produk Motor<b></strong></h2>
<br></br>
<form method='post' action='aksi.php?module=produk&act=input' enctype='multipart/form-data'>
<div class='col-lg-12'>
        <div class='form-group'>
            <input class='form-control' name='nama' type='text' placeholder='Masukkan Nama'>
        </div>
          <div class='form-group'>
            <input class='form-control' name='merk' type='text' placeholder='Masukkan Merk'>
          </div>
          <div class='form-group'>
            <input class='form-control' name='spesifikasi' type='text' placeholder='Masukkan Spesifikasi'>
          </div>
          <div class='form-group'>
            <input class='form-control' name='prestasi' type='text' placeholder='Masukkan Prestasi'>
          </div>
          <div class='form-group'>
            <input class='form-control' name='foto' type='file' placeholder='Masukkan Foto'>
          </div>
          <br>
                <input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
                <input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
            </div>
        <br>
</form>";
break;
case "editproduk":
                    $edit=mysqli_query($koneksi,"select * from hasil_motor where
                        id_motor='$_GET[id]'");
                    $r=mysqli_fetch_array($edit);
                    echo "
                    <br><b><h2 style='margin-left:2%'><b>Edit Produk</b></h2><br>
                    <form method=post action='aksi.php?module=produk&act=edit' enctype='multipart/form-data'>
                    <div class='col-lg-12'>
                    
                    <div class='form-group'>
                    <input type=hidden name=id value='$r[id_motor]'>
                        <input class='form-control' name='nama' type='text' placeholder='Masukkan Nama' value='$r[nama_motor]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='merk' type='text' placeholder='Masukkan Merk'  value='$r[merk_motor]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='spesifikasi' type='text' placeholder='Masukkan Spesifikasi'  value='$r[spesifikasi_motor]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='prestasi' type='text' placeholder='Masukkan Prestasi'  value='$r[prestasi_motor]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='foto' type='file' placeholder='Masukkan Foto'  value='$r[foto_motor]'>
                    </div>
                        <br>
                <input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
                <input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
            </div>
                        </form>";
break;}
?>