<?php
include '_header.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand card-header" href="">Database</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <?php if ($_SESSION['level'] == 1) { ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data_barang.php" name="eskrim_id">Data Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kategori.php" name="name_id">Kategory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_penjualan.php">Data Transaksi</a>
          </li>
         <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="data_penjualan.php">Data Transaksi</a>
          </li>
         <?php } ?>
         <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</body>
<?php include '_footer.php' ?>