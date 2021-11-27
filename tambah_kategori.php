<?php include '_menu.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="card border-primary mt-3">
                    <div class="card-body">
                        <h1 class="card-header bg-primary text-center">Form Tambah data Category</h1>
                        <td></td>
                        <form action="aksi_tambah_sales.php" method="post" style="padding: 10pt;">
                            <label>Nama</label><br>
                            <input type="text" name="kategori" placeholder="Nama Kategori" required="">
                            <br><br>
                            <div class="d-md-block">
                                <a href="kategori.php" type="button" class="btn btn-outline-danger btn-sm">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-outline-primary btn-sm">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include '_footer.php' ?>