<?php

$db = mysqli_connect("localhost", "root", "", "buruh");

if ( ! $db ) {
	die( "Tidak terkoneksi database" );
}
?>