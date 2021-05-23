<?php
include("koneksi.php");
if (isset($_POST["login"])) {
    $namapengguna = $_POST["username"];
    $sandi = md5($_POST["password"]);
    $sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$namapengguna' AND password='$sandi'");
    $jumlah = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);
    if ($jumlah > 0) {
        echo "<script language=javascript>
            window.alert ('Anda Berhasil Login')
            javascript:document.location='dashboard.php'
            </script>";
    } else {
        echo "<script language=javascript>
            window.alert ('Gagal Login')
            javascript:document.location='login.php'
            </script>";
    }
}
