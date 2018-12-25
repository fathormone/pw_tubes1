<?php
include "../include/koneksi.php";
if ($_GET['module']=='dashboard'){
    ?>
 <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
            <br>
               <p class=welcome><h6>Selamat datang <b><?php echo $_SESSION['namauser']; ?></b>,
        silahkan klik menu pilihan disebelah kiri untuk mengelola konten
        website Tryto Project.<br><br> Terima Kasih.</h6></p>
            <br>
                <!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>

            
                    <div class="col-lg-6">
                        <div class="card weather-box">
                            <h4 class="weather-title box-title">Weather</h4>
                            <div class="card-body">
                                <div class="weather-widget">
                                    <div id="weather-one" class="weather-one"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- /Calender Chart Weather -->
                
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
     </div>}
<?php
}

elseif ($_GET['module']=='produk') {
    include "modul/produk.php";
}

elseif ($_GET['module']=='profil') {
    include "modul/profil.php";

}

elseif ($_GET['module']=='pegawai') {
    include "modul/pegawai.php";

}

else{
    echo "<p><b>Modul belum ada</b></p>";
    # code...
}
?>