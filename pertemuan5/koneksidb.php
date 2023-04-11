<?php
   include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
   if($cnn){
      echo "Koneksi Sukses";
      $sqli ="CREATE DATABASE " .DBNAME;

    $hasil = mysqli_query($cnn, $sqli);
    if ($hasil){
        echo "Database". DBNAME . "berhasil dibuat";
    }else{
        echo "Database". DbNAME . "gagal dibuat";
    }

}else{

    echo "koneksi Gagal<br>".mysqli_connect_error();
}