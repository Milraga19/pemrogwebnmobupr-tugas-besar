<?php

if (isset($_POST['edit'])) {
    //Include file koneksi, untuk koneksikan ke database
    include 'koneksi.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $image = $_FILES['image']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['image']['tmp_name'];

        if (!empty($image)) {
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                //Mengupload gambar
                move_uploaded_file($file_tmp, '../img/' . $image);
                $id = $_POST['id'];
                $product_price = $_POST['product_price'];
                $product_name = $_POST['product_name'];
                $product_desc = $_POST['product_desc'];
                $product_details = $_POST['product_details'];

                $sql = "UPDATE menu SET product_name= '$product_name',product_price= '$product_price',product_description = '$product_desc',product_detail= '$product_details',image= '$image' WHERE id = '$id'";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    header("Location:menu.php");
                } else {
                    header("Location:menu.php?add=gagal");
                }
            }
        } else {
            $image = "default.png";
        }
    }
}
