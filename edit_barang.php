 <?php
    require 'koneksi.php';
    $id = $_GET['id'];
    $sql = $connection->query("SELECT * FROM tabel_eskrim WHERE id=('$id')");
    $result = mysqli_fetch_assoc($sql);
    ?>

 <body>
     <?php include '_menu.php' ?> ;
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-md-4">
                     <div class="card border-success">
                         <div class="card-body">
                             <h1 class="card-header bg-success text-center">Form Edit</h1>
                             <td></td>
                             <form action="aksi_edit_barang.php" method="post" style="padding: 10pt;">
                                 <input type="hidden" name="id" value="<?= $id; ?>">
                                 <label>Nama Es Cream</label> <br>
                                 <input type="text" name="nama_eskrim" id="nama_eskrim" placeholder="Nama Es Cream" required="" value="<?= $result['nama_eskrim'] ?>">
                                 <br><br>
                                 <label>Rasa Es Cream</label> <br>
                                 <input type="text" name="rasa_eskrim" id="rasa_eskrim" placeholder="Masukkan Rasa Es Cream" required="" value="<?= $result['rasa_eskrim'] ?>">
                                 <br><br>
                                 <label>Harga</label> <br>
                                 <input type="number" name="harga" id="harga" placeholder="Masukkan Harga" required="" value="<?= $result['harga'] ?>">
                                 <br><br>
                                 <label>Stock</label> <br>
                                 <input type="number" name="stok" id="stok" placeholder="Masukkan Stock" required="" value="<?= $result['stok'] ?>">
                                 <br><br>
                                 <div class="d-md-block">
                                     <a href="data_mobil.php" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
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