<?php
include '../include/koneksi.php';
switch (@$_GET['act']) {
default:
?>
<?php
$tampil=mysqli_query($koneksi, "select * from profile_bengkel");
$r=mysqli_fetch_array($tampil)
?>
 <div class="content">
            <div class="animated fadeIn">


                <div class="row">
  <!--       <div id="right-panel" class="right-panel"> -->

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h2><strong>Edit Profil Toko</strong></h2></div>
                            <div class="card-body card-block">
                                <form method=post action='aksi.php?module=profil&act=editprofil'>
                                <input type="hidden" name="id" value="<?php echo $r['id_profile'];?>">
                                <div class="form-group">
                                    <label for="namapemilik" class=" form-control-label">Nama Pemilik</label>
                                    <input type="text" name="nama" id="namapemilik" placeholder="Masukkan nama pemilik" class="form-control" value="<?php echo $r['nama_pemilik'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalberdiri" class=" form-control-label">Tanggal Berdiri</label>
                                    <input type="text" name="tanggalberdiri"id="tanggal_berdiri" placeholder="Tanggal Bulan Tahun" class="form-control" value="<?php echo $r['tanggal_berdiri'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class=" form-control-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat" class="form-control" value="<?php echo $r['alamat'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas" class=" form-control-label">Fasilitas</label>
                                    <input type="text" name="fasilitas" id="fasilitas" placeholder="Masukkan fasilitas" class="form-control" value="<?php echo $r['fasilitas'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="kerjasama" class=" form-control-label">Kerjasama Brand/Merk</label>
                                    <textarea id="mytextarea" name="kerjasama"><?php echo $r['kerjasama'];?></textarea>
                                </div>
                            </div>
                            </div>
                                
                                <input class='btn btn-success' type='submit' name="submit" value='Save'>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

// case "editprofil":
//                     $edit=mysqli_query($koneksi,"select * from profile_bengkel where
//                         id_profile='$_GET[id]'");
//                     $r=mysqli_fetch_array($edit);
//                     echo "
//                     <br><b><h2 style='margin-left:2%'><b>Edit Profil Bengkel</b></h2><br>
//                     <form method=post action='aksi.php?module=profil&act=edit'>
//                     <div class='col-lg-12'>
                    
//                     <div class='form-group'>
//                     <input type=hidden name=id value='$r[id_profile]'>
//                         <input class='form-control' name='nama' type='text' placeholder='Masukkan Nama' value='$r[nama_pemilik]'>
//                     </div>
//                     <div class='form-group'>
//                         <input class='form-control' name='tanggal_berdiri' type='text' placeholder='Masukkan Tanggal Berdiri'  value='$r[tanggal_berdiri]'>
//                     </div>
//                     <div class='form-group'>
//                         <input class='form-control' name='alamat' type='text' placeholder='Masukkan Alamat'  value='$r[alamat]'>
//                     </div>
//                     <div class='form-group'>
//                         <input class='form-control' name='fasilitas' type='text' placeholder='Masukkan Fasilitas' value='$r[fasilitas]'>
//                     </div>
//                     <div class='form-group'>
//                         <input class='form-control' name='kerjasama' type='text' placeholder='Masukkan Fasilitas'  value='$r[kerjasama]'>
//                     </div>
//                     <div class='form-group'>
//                         <input class='form-control' name='foto' type='file' placeholder='Masukkan Foto'  value='$r[foto_motor]'>
//                     </div>
//                         <br>
//                 <input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
//                 <input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
//             </div>
//                         </form>";
// break;

break;}
?>


<script type="text/javascript" src="../tinymce/tinymce.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
    </script>