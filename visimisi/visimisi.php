<?php 

include 'koneksi.php';
$judul = addslashes($_POST['judul']);
$deskripsi = addslashes($_POST['deskripsi']);
 echo htmlspecialchars($judul,$deskripsi);
$data = mysqli_query($db, "UPDATE visimisi SET deskripsi='$deskripsi' WHERE judul='VISI' ");

header("location:../visimisi.php?pesan=ubah");

?>