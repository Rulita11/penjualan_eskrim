<?php include '_menu.php' ?> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="card border-primary mt-3">
                        <div class="card-body">
                            <h1 class="card-header bg-primary text-center">Transaksi Penjualan</h1>
                            <td></td>
                            <form action="aksi_penjualan.php" method="post">
                                <label> Nama Es Cream </label> <br>
                                <select name="eskrim_id">
                                    <?php
                                    require 'koneksi.php';
                                    $sql = $connection->query("SELECT * FROM tabel_eskrim");
                                    foreach ($sql as $row) :
                                    ?>
                                        <option value="<?= $row['id']; ?>"><?= $row['nama_eskrim']; ?></option>
                                    <?php endforeach ?>
                                </select> <br> <br>
                                <label> Kategori </label> <br>
                                <select name="name_id">
                                    <?php
                                    require 'koneksi.php';
                                    $sql = $connection->query("SELECT * FROM tabel_kategori");
                                    foreach ($sql as $row) :
                                    ?>
                                        <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                    <?php endforeach ?>
                                </select> <br> <br>
                                <label>Jumlah beli</label> <br>
                                <input type="number" name="jumlah"> <br> <br>
                                <a href="data_barang.php" type="button" class="btn btn-outline-danger btn-sm">Cancel</a>
                                <input type="submit" value="submit" name="proses_penjualan" class="btn btn-outline-primary btn-sm">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include '_footer.php' ?>