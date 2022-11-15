<!doctype HTML>
<html>
<head>
    <title>Form Barang</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input.php" method="POST">


                    <div class="form-group">
                        <label for="kd_barang">KODE BARANG</label>
                        <input type="hidden" name="barang_id" class="form-control">
                        <input type="text" name="kd_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA BARANG</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis">JENIS BARANG</label>
                        <select name="jenis" class="form-control">
                            <option value="PADAT">PADAT</option>
                            <option value="CAIR">CAIR</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">JUMLAH</label>
                        <input name="jumlah" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label for="pembayaran">METODE PEMBAYARAN</label>
                        <select name="pembayaran" class="form-control">
                            <option value="cash">CASH</option>
                            <option value="credit">CREDIT</option>
                        </select>
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>