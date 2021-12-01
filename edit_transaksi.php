<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = $connection->query("SELECT * FROM tabel_penjualan WHERE id=('$id')");
$result = mysqli_fetch_assoc($sql);
?>
<?php include '_menu.php' ?>
    <form action="aksi_edit_penjualan.php" method="post" style="padding: 10pt;">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>Nama Eskrim</label> <br>
        <input type="text" name="eskrim_id" id="eskrim_id" placeholder="Nama Mobil" required="" value="<?= $result['eskrim_id'] ?>">
        <br><br>
        <label>Rasa Eskrim</label> <br>
        <input type="text" name="name_id" id="name_id" placeholder="Masukkan Rasa Eskrim" required="" value="<?= $result['name_id'] ?>">
        <br><br>
        <label>Jumlah</label> <br>
        <input type="text" name="jumlah" id="jumlah" placeholder="Nama Mobil" required="" value="<?= $result['jumlah'] ?>">
        <br><br>
        <button type="submit" name="submit">Submit</button>
        </div>
        </div>
        </div>
    </form>
</body>
<body>

</html>