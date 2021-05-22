<?php
include 'koneksi.php';
if ($_POST['kirim']) {
	$namadepan	= $_POST['nama_depan'];
	$namabelakang = $_POST['nama_belakang'];
	$email	= $_POST['email'];
	$judul	= $_POST['subject'];
	$pesan	= $_POST['pesan'];
	$sql = mysqli_query($koneksi, "INSERT INTO complaint (nama_depan,nama_belakang,email,subject,message) VALUES ('$namadepan','$namabelakang','$email','$judul','$pesan')");
	// $pengirim	= 'Dari: ' . $namadepan . ' <' . $email . '>';

	// if (mail($admin, $judul, $pesan, $pengirim)) {
	echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	// } else {
	// }
} else {
	echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';

	header("Location: contact.php");
}
