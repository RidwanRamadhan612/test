<?php

include 'koneksi.php';
$judul = $_GET['judul'];
$data = mysqli_query($db, "DELETE FROM visimisi WHERE judul='$judul' ")or die(mysqli_error());
 
header("location:../visimisi.php?pesan=hapus");
?>