<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>


<form method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="id_kategori">
                <option value="">Pilih Kategori</option>
                <?php
                $ambil = $koneksi->query("SELECT * FROM kategori");
                while ($perkategori = $ambil->fetch_assoc()) {
                ?>
                    <option value="<?php echo $perkategori["id_kategori"] ?>">
                        <?php echo $perkategori['kategori'] ?>
                    </option>
                <?php }  ?>
            </select>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="harga">
        </div>
    </div>
    <div class="col-md-6">


        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
        <a href="admin_produk.php" class="btn btn-danger"> Batal </a>
    </div>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/foto_produk/" . $nama);
    $query = "INSERT INTO produk VALUES ('','$_POST[nama]','$_POST[id_kategori]','$_POST[harga]','$nama','$_POST[deskripsi]')";

    if (mysqli_query($koneksi, $query)) {
        echo "<meta http-equiv='refresh' content='1;url=admin_produk.php'>";
    } else {
        echo "<meta http-equiv='refresh' content='1;url=admin_produk.php'>";
    }
}
?>

<?php include("../templates/admin_footer.php"); ?>