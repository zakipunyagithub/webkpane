<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");

header("Location:karyawan_kategori.php");
