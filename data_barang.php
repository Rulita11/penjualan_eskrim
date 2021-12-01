<?php include '_menu.php' ?>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <h2>Data Barang</h2>
                        </div>
                        <div class="col-md-6 d-grid gap-2 justify-content-md-end mt-2 mb-2">
                            <a class="btn btn-primary" href="tambah_barang.php" role="button">Tambah Data Barang</a>
                        </div>
                    </div>
                </div>
            </div>
            <table border="1" class="table table-striped table-hover table-bordered border-dark">
                <tr class="table-dark text-center">
                    <th>No</th>
                    <th>Nama Eskrim</th>
                    <th>Rasa</th>
                    <th>Harga Eskrim</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                if (isset($_POST['tombol_cari'])) {
                    $cari = $_REQUEST['keyword'];
                    $hal = 5;
                    $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $mulai = ($page > 1) ? ($page * $hal) - $hal : 0;
                    $result = $connection->query("SELECT * FROM tabel_eskrim WHERE rasa_eskrim LIKE '%$cari%' ");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total / $hal);
                    $sql = $connection->query("SELECT * FROM tabel_eskrim WHERE rasa_eskrim LIKE '%$cari%' LIMIT $mulai, $hal");
                } else {
                    $hal = 5;
                    $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $mulai = ($page > 1) ? ($page * $hal) - $hal : 0;
                    $result = $connection->query("SELECT * FROM tabel_eskrim");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total / $hal);
                    $sql = $connection->query("SELECT * FROM tabel_eskrim LIMIT $mulai, $hal");
                }
                foreach ($sql as $result) :
                ?>
                    <tr>
                        <td class="text-center bg-light"><?= $no++; ?></td>
                        <td><?= $result["nama_eskrim"]; ?></td>
                        <td class="text-center"><?= $result["rasa_eskrim"]; ?></td>
                        <td><?= $result["harga"]; ?></td>
                        <td class="text-center"><?= $result["stok"]; ?></td>
                        <td class="text-center">
                            <a href="edit_barang.php?id=<?= $result['id'] ?>" class="btn btn-warning">Edit</a> 
                            <a href="hapus_barang.php?id=<?= $result['id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <label>Cari Rasa</label>
                                <input type="text" name="keyword">
                                <input type="submit" value="cari" name="tombol_cari">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul class="pagination pagination-sm justify-content-end">
                                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="data_barang.php?halaman=<?= $page - 1; ?>">Previous</a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++) :
                                        if ($i != $page) {
                                    ?>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="data_barang.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                    <?php
                                    } else {
                                        ?>
                                        <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="data_barang.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                    </li>
                                    <?php
                                    }
                                    endfor
                                   ?>
                                    <li class="page-item <?= $page == $pages ? 'disabled' : '' ?>">
                                        <a class="page-link" href="data_barang.php?halaman=<?= $page + 1; ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<footer> </footer>

</html>