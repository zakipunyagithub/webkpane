<?php 
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 
$sql = "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
if (mysqli_query($koneksi, $sql)) {
      header("location:../cs_admin.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
 

?>