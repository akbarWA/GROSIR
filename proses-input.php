<?php

$barang_id=$_POST['barang_id'];
$kd_barang=$_POST['kd_barang'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$pembayaran=$_POST['pembayaran'];


include "koneksi.php";

$simpan=$koneksi->query("insert into grosir(barang_id,kd_barang,nama,jenis,harga,jumlah,pembayaran) 
                        values ('$barang_id', '$kd_barang', '$nama', '$jenis','$harga','$jumlah','$pembayaran')");

if($simpan==true){

    header("location:tampil.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>