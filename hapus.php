<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from grosir where barang_id='$id'");

if($hapus==true){

    header("location:tampil.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>