<?php include '_menu.php' ?>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="col-md-4">
                     <div class="card border-primary mt-3">
                         <div class="card-body">
                             <h1 class="card-header bg-primary text-center">Form Tambah data Barang</h1>
                             <td></td>
                             <form action="aksi_tambah_barang.php" method="post" style="padding: 10pt;">
                                 <input type="hidden" name="id" value="<?= $id; ?>">
                                 <label>Nama</label> <br>
                                 <input type="text" name="nama_eskrim" id="nama_eskrim" placeholder="Nama Es Cream" required="">
                                 <br><br>
                                 <label>Rasa Es Cream</label> <br>
                                 <input type="text" name="rasa_eskrim" id="rasa_eskrim" placeholder="Masukkan Rasa Es Cream" required="">
                                 <br><br>
                                 <label>Harga</label> <br>
                                 <input type="number" name="harga" id="harga" placeholder="Masukkan Harga" required="">
                                 <br><br>
                                 <label>Stock</label> <br>
                                 <input type="number" name="stok" id="stok" placeholder="Masukkan Stock" required="">
                                 <br><br>
                                 <div class="d-md-block">
                                     <a href="data_barang.php" type="button" class="btn btn-outline-danger btn-sm">Cancel</a>
                                     <button type="submit" name="submit" class="btn btn-outline-primary btn-sm">Save</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    </form>


</body>
<?php include '_footer.php' ?>