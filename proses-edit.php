<?php

include "koneksi.php";
$kd_barang=$_POST['kd_barang'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$pembayaran=$_POST['pembayaran'];
$id=$_POST['barang_id'];


$ubah=$koneksi->query("update grosir set barang_id='$kd_barang', nama='$nama',jenis='$jenis',harga='$harga',jumlah='$jumlah',pembayaran='$pembayaran' where kd_barang='$kd_barang'");
            

if($ubah==true){

    header("location:tampil.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>