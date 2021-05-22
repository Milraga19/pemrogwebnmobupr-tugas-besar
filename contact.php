<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="contact-style.css">
    <!-- my font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Kontak Kami - Nasgorskripsi.id</title>
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
                    <a class="nav-link" href="product.php">Produk</a>
                    <a class="nav-link" href="about.php">Tentang Kami</a>
                    <a class="nav-link active" href="contact.php">Kontak Kami</a>
                    <a class="tombol btn btn-warning" href="http://wa.me/6285241041620?text=Saya%20ingin%20memesan">Order
                        Sekarang</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- container -->
    <div class="container">
        <h4 class="title">Berikan Kritik dan Saranmu, Agar Kami Berkembang Lebih Baik</h4>
        <section class="ftco-section contact-section">
            <div class="container mt-5">
                <div class="row block-9">
                    <div class="col-md-4 contact-info ftco-animate">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h2 class="h4">Informasi Kontak</h2>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Alamat :</span> Kendari, Jl. Jend. AH. Nasution (PUJASERA)</p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>No. HP : </span> <a href="http://wa.me/6282285690748">+ 62 822 8569 0748</a>
                                </p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Email : </span> <a href="mailto:nasgorskripsi@business.id">nasgorskripsi.id@business.id</a></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Website:</span> <a href="#">nasgorskripsi.id</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 ftco-animate">
                        <form action="kirim.php" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Judul" required>
                            </div>
                            <div class="form-group">
                                <textarea name="pesan" cols="30" rows="7" class="form-control" placeholder="Pesan yang ingin disampaikan" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="kirim" value="Kirim Pesan" class="btn btn-warning py-3 px-5">
                        </form>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </section>

    <div id="map"></div>
    <!-- footer -->
    <div class="row footer">
        <div class="col text-center">
            <p>2021 All Rights Reserved by DIAHEB Team</p>
        </div>
    </div>
    <!-- akhr footer -->
    </div>
    <!-- akhir container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>