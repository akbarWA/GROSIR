<!doctype HTML>
<html>
<head>
    <title>Data Barang</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>GROSIR</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>

                <th>KODE BARANG</th>
                <th>NAMA NAMA BARANG</th>
                <th>JENIS BARANG</th>
                <th>HARGA BARANG</th>
                <th>JUMLAH BARANG</th>
                <th>METODE PEMBAYARAN</th>
                <th>
                    <a href="input.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from grosir");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['kd_barang']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['pembayaran']?></td>
                <td>

                <a href="edit.php?id=<?php echo $row['barang_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus.php?id=<?php echo $row['barang_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#dataTables').DataTable();
    });

</script>

</body>
</html>