<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = $connection->query("SELECT * FROM tabel_kategori WHERE id=('$id')");
$result = mysqli_fetch_assoc($sql);
?>

    <?php include '_menu.php' ?> ;
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="card border-success">
                        <div class="card-body">
                            <h1 class="card-header bg-success text-center">Form Edit</h1>
                            <td></td> <br>
                            <form action="aksi_edit_kategori.php" method="post">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <label>Nama Kategori</label> <br>
                                <input type="text" name="name" id="name" placeholder="Nama Sales" required="" value="<?= $result['name'] ?>">
                                <br> <br>
                                <div class="d-md-block">
                                <a href="kategori.php" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-outline-success btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>