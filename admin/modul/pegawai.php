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
                                <h2><strong class="card-title">Daftar Pegawai</strong></h2>
                            </div>
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Foto</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$tampil=mysqli_query($koneksi, "select * from pegawai_bengkel order by id_pegawai");
$no=1;
while 
    ($r=mysqli_fetch_array($tampil)){


?>
                                        <tr>
                                            <td class="serial"><?php echo $no++?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img width="50" height="50" src="<?php echo '../images/'.$r['foto_pegawai'];?>" alt=""></a>
                                                </div>
                                            </td>

                                            <td><span><?php echo $r['nama_pegawai'];?></span></td>
                                            <td><span class="ttl"><?php echo $r['ttl_pegawai'];?></span> </td>
                                            <td><span class="alamat"><?php echo $r['alamat_pegawai'];?></span> </td>
                                            <td><span class="jabatan"><?php echo $r['jabatan_pegawai'];?></span></td>
                                            <td>
                                               <form method=post action='?module=pegawai&act=editpegawai&id=<?php  echo $r['id_pegawai'];   ?>'>
                                <input class='btn btn-success' type=submit value='Edit'>
                            </form>
                                            <br>
                                                <form method=post action='aksi.php?module=pegawai&act=hapus&id=<?php echo $r['id_pegawai']; ?>'>
                                <input class='btn btn-danger' type=submit value='Hapus'>
                            </form>

                                            </td>
                                            
                                        </tr>
                                         <?php   } ?>
                                        
                                    </tbody>
                                </table>
                                <form method=post action='server.php?module=pegawai&act=tambahpegawai'>
                                <input class='btn btn-primary' type=submit value='Tambah Pegawai'>
                        </div>
                    </div>
<?php
break;
case "tambahpegawai":
echo 
"<br></br>
<h2><strong class='card-title' style='margin-left:2%'>Tambah Pegawai</strong></h2>
<br></br>
<form method='post' action='aksi.php?module=pegawai&act=input' enctype='multipart/form-data'>
<div class='col-lg-12'>
                <div class='form-group'>
                    <input class='form-control' name='nama' type='text' placeholder='Masukkan Nama'>
                </div>
          <div class='form-group'>
            <input class='form-control' name='ttl' type='text' placeholder='Masukkan Tempat Tanggal Lahir'>
          </div>
          <div class='form-group'>
            <input class='form-control' name='alamat' type='text' placeholder='Masukkan Alamat'>
          </div>
          <div class='form-group'>
            <input class='form-control' name='jabatan' type='text' placeholder='Masukkan Jabatan'>
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
case "editpegawai":
                    $edit=mysqli_query($koneksi,"select * from pegawai_bengkel where
                        id_pegawai='$_GET[id]'");
                    $r=mysqli_fetch_array($edit);
                    echo "
                    <br><b><h2 style='margin-left:2%'><b>Edit Pegawai</b></h2><br>
                    <form method=post action='aksi.php?module=pegawai&act=edit' enctype='multipart/form-data'>
                    <div class='col-lg-12'>
                    
                    <div class='form-group'>
                    <input type=hidden name=id value='$r[id_pegawai]'>
                        <input class='form-control' name='nama' type='text' placeholder='Masukkan Nama' value='$r[nama_pegawai]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='ttl' type='text' placeholder='Masukkan TTL'  value='$r[ttl_pegawai]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='alamat' type='text' placeholder='Masukkan Alamat'  value='$r[alamat_pegawai]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='jabatan' type='text' placeholder='Masukkan Jabatan'  value='$r[jabatan_pegawai]'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' name='foto' type='file' placeholder='Masukkan Foto' >
                    </div>
                        <br>
                <input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
                <input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
            </div>
                        </form>";
break;}
?>