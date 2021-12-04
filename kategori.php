<?php
require 'koneksi.php';
$sql = $connection->query("SELECT * FROM tabel_kategori");
?>
    <?php include '_menu.php' ?>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <h2>Data Kategory</h2>
                        </div>
                        <div class="col-md-6 d-grid gap-2 justify-content-md-end mt-2 mb-2">
                            <a class="btn btn-primary mt-1" href="tambah_kategori.php" role="button">Tambah Data Kategori</a>
                        </div>
                    </div>
                </div>
            </div>
            <table border="1" class="table table-striped table-hover table-bordered border-dark">

                <tr class="text-center table-dark">
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                   if (isset($_POST['tombol_cari'])) {
                    $cari = $_REQUEST['keyword'];
                    $hal = 5;
                    $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $mulai = ($page > 1) ? ($page * $hal) - $hal : 0;
                    $result = $connection->query("SELECT * FROM tabel_kategori WHERE name LIKE '%$cari%' ");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total / $hal);
                    $sql = $connection->query("SELECT * FROM tabel_kategori WHERE name LIKE '%$cari%' LIMIT $mulai, $hal");
                } else {
                    $hal = 5;
                    $page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $mulai = ($page > 1) ? ($page * $hal) - $hal : 0;
                    $result = $connection->query("SELECT * FROM tabel_kategori");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total / $hal);
                    $sql = $connection->query("SELECT * FROM tabel_kategori LIMIT $mulai, $hal");
                }
                foreach ($sql as $result) : ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $result["name"]; ?></td>
                        <td class="text-center">
                            <a href="edit_kategori.php?id=<?= $result['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus_kategori.php?id=<?= $result['id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <label>Cari Kategori</label>
                                <input type="text" name="keyword">
                                <input type="submit" value="Cari" name="tombol_cari">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul class="pagination pagination-sm justify-content-end">
                                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="kategori.php?halaman=<?= $page - 1; ?>">Previous</a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++) :
                                        if ($i != $page) {
                                    ?>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="kategori.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                        <?php
                                        } else {
                                        ?>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="kategori.php?halaman=<?= $i; ?>"><?= $i; ?></a>
                                            </li>
                                    <?php
                                        }
                                    endfor
                                    ?>
                                    <li class="page-item <?= $page == $pages ? 'disabled' : '' ?>">
                                        <a class="page-link" href="kategori.php?halaman=<?= $page + 1; ?>">Next</a>
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
<?php include '_footer.php' ?>