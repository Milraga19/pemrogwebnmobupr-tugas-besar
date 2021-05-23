<?php
include 'koneksi.php';

$id = $_GET["id"];
$image = $_GET["image"];
$sql = "delete from menu where id=$id";
$hapus_bank = mysqli_query($koneksi, $sql);

//Menghapus file gambar
unlink("../img/" . $image);

if ($hapus_bank) {
    header("Location:menu.php");
} else {
    header("Location:menu.php?hapus=gagal");
}
