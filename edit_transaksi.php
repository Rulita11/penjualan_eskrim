<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = $connection->query("SELECT * FROM tabel_penjualan WHERE id=('$id')");
$result = mysqli_fetch_assoc($sql);
?>
<?php include '_menu.php' ?>
    <form action="aksi_edit_sales.php" method="post" style="padding: 10pt;">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>Nama Mobil</label> <br>
        <input type="text" name="mobil_id" id="mobil_id" placeholder="Nama Mobil" required="" value="<?= $result['mobil_id'] ?>">
        <br><br>
        <label>Nama Sales</label> <br>
        <input type="text" name="sales_id" id="sales_id" placeholder="Masukkan sales_id" required="" value="<?= $result['sales_id'] ?>">
        <br><br>
        <label>Jumlah</label> <br>
        <input type="text" name="jumlah" id="jumlah" placeholder="Masukkan jumlah" required="" value="<?= $result['jumlah'] ?>">
        <br><br>
        <button type="submit" name="submit">Submit</button>
        </div>
        </div>
        </div>
    </form>
</body>
<body>

</html>