<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>

<div class="container-fluid" style="background-color: white; height: 100%; padding:20px;">
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <a href="cs_link_youtube.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-home"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM pesan");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Link Youtube</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <a href="cs_bahan_jamu.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-home"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM pesan");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Bahan Jamu</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <a href="cs_kategori.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                     <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM kategori");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Data Kategori</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <a href="cs_produk.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM produk");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?> 
                    <div class="mr-5">Data Produk</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <a href="cs_tentang.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM produk");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?> 
                    <div class="mr-5">Kontak</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <a href="cs_komentar.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM pesan");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Data Buku Tamu</div>
                </div>
            </a>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("../templates/cs_footer.php"); ?>