<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="product-style.css">
    <!-- my font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Produk - Nasgorskripsi.id</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">NASGORSKRIPSI.ID</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link active" href="product.php">Produk</a>
                    <a class="nav-link" href="about.php">Tentang Kami</a>
                    <a class="nav-link" href="contact.php">Kontak Kami</a>
                    <a class="tombol btn btn-warning" href="http://wa.me/6285241041620?text=Saya%20ingin%20memesan">Order
                        Sekarang</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <?php
    include 'koneksi.php';
    $tampil = mysqli_query($koneksi, "SELECT * from menu");
    ?>
    <!-- container -->
    <div class="container">
        <div class="row product">
            <div class="col">
                <h2>MENU KAMI</h2>
                <div class="card-deck">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($tampil)) {
                    ?>
                        <div class="card" style="width: 18rem;">
                            <img src="img/<?php echo $row['image'] ?>" class="card-img-top" alt="produk nasgor">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['product_name']; ?></h5>
                                <p class="card-text price"><?= $row['product_price']; ?></p>
                                <p class="card-text description"><?= $row['product_description'] ?></p>
                                <a href="#" class="btn btn-info tombol" data-toggle="modal" data-target="#exampleModal<?= $row['id']; ?>">Detail Produk</a>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $row['product_name']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="img/<?php echo $row['image'] ?>" class="card-img" alt="default">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title price in-modal"><?= $row['product_price']; ?></h5>
                                                    <p class="card-text description in-modal"><?= $row['product_detail']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <!-- <div class="modal fade" id="exampleModalPembimbing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nasgor Pembimbing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="img/penguji.png" class="card-img" alt="default">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title price in-modal">Rp. 13.000</h5>
                                            <p class="card-text description in-modal">Kalau secara tampilan warna Rasa
                                                Pembimbing, agak warna kecoklatan. Tapi warna kecoklatan ini bukan
                                                karena kecap . Karna kita ngak pake kecap. Tapi bumbu rahasia yang di
                                                datangkan dari gunung
                                                Kliwong, asik sekali. Secara tampilan warna aja udah beda sm rasa
                                                penguji. Dari segi rasa, Pembimbing lebih agak soft dan ngak pedis, tapi
                                                ketika di makan rasa khas dan uniknya langsung melebur di lidah.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalPasangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pasangan NasgorSkripsi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="img/pasangan.png" class="card-img" alt="default">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title price in-modal">Rp. 5.000</h5>
                                            <p class="card-text description in-modal">Menu minuman yang terdiri dari dua
                                                varian rasa, yaitu esteh mint dan es jeruk, sangat pas diminum bersama
                                                dengan nasi goreng yang pedas. Dan jangan lupa jika sudah pesan nasgor
                                                skripsi, jangan lupa pasangannya.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- akhir modal -->
            </div>
        </div>
        <!-- footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2021 All Rights Reserved by DIAHEB Team</p>
            </div>
        </div>
        <!-- akhr footer -->
    </div>
    <!-- akhir container -->
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>