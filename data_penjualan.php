<?php
require 'koneksi.php';
$sql = $connection->query("SELECT * FROM tabel_penjualan");
?>

<?php include '_menu.php' ?>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <h2>Data Penjualan</h2>
                    </div>
                    <div class="col-md-6 d-grid gap-2 justify-content-md-end mt-2 mb-2">
                        <a class="btn btn-primary" href="form_transaksi.php" role="button">Form penjualan</a>
                    </div>
                </div>
            </div>
        </div>
        <table border="1" class="table table-striped table-hover table-bordered border-dark">
            <tr class="text-center table-dark">
                <th>No</th>
                <th>Nama Eskrim</th>
                <th>Rasa Eskrim</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1;
            if (isset($_POST['btn_cari'])) {
                $eskrim_id = $_REQUEST['eskrim_id'];
                $cari = $_REQUEST['keyword'];
                $sql = $connection->query("SELECT * FROM tabel_penjualan INNER JOIN tabel_eskrim ON tabel_penjualan.eskrim_id = tabel_eskrim.id INNER JOIN tabel_kategori ON tabel_penjualan.name_id = tabel_kategori.id WHERE $eskrim_id LIKE '%$cari%' ");
            } else {
                $sql = $connection->query("SELECT * FROM tabel_penjualan INNER JOIN tabel_eskrim ON tabel_penjualan.eskrim_id = tabel_eskrim.id INNER JOIN tabel_kategori ON tabel_penjualan.name_id = tabel_kategori.id"); 
            }
            foreach ($sql as $result) : ?>
                <tr>
                    <td class="text-center "><?= $no++; ?></td>
                    <td><?= $result["nama_eskrim"]; ?></td>
                    <td><?= $result["rasa_eskrim"]; ?></td>
                    <td class="text-center"><?= $result["name"]; ?></td>
                    <td class="text-center"><?= $result["jumlah"]; ?></td>
                    <td><?= $result["harga"]; ?></td>
                    <td><?= $total[] = $result["harga"] * $result["jumlah"]; ?></td>
                    <td class="text-center">
                        <a href="edit_.php?id=<?= $result['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus_transaksi.php?id=<?= $result['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="6" style="text-align: right;">Sub Total</td>
                <td colspan="2"><?= array_sum($total) ?></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <label>Cari Berdasarkan</label>
                            <select name="kategori">
                                <option value="nama_eskrim">Nama Es Cream</option>
                                <option value="kategori">Kategori</option>
                            </select>
                            <input type="text" name="keyword">
                            <input type="submit" value="cari" name="btn_cari">
                        </form>
                    </div>
                    <div class="col-md-6">
                            <!-- <nav>
                                <ul class="pagination pagination-sm justify-content-end">
                                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="data_penjualan.php?halaman=<?= $page - 1; ?>">Previous</a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++) :
                                        if ($i != $page) {
                                    ?>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="data_penjualan.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                    <?php
                                    } else {
                                        ?>
                                        <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="data_penjualan.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                    </li>
                                    <?php
                                    }
                                    endfor
                                   ?>
                                    <li class="page-item <?= $page == $pages ? 'disabled' : '' ?>">
                                        <a class="page-link" href="data_penjualan.php?halaman=<?= $page + 1; ?>">Next</a>
                                    </li>
                                </ul>
                            </nav> -->
                        </div>
                </div>
            </div>
        </div>

    </form>
</div>
</body>
<?php include '_footer.php' ?>