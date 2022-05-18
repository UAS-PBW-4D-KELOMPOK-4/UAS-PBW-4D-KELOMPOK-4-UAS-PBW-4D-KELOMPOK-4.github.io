<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Tambah Data Pelajar</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="assets/images/icon.png" type="image/png">
    
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== LineIcons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/style1.css">

</head>

<body>
    <?php
    session_start();
    ?>

    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php">Home<span></span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#">Data Pelajar<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Keluar<span></span></a>
                                    </li>

                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div class="header-hero">
            <div class="container" style="padding-top: 100px">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if (isset($_SESSION['success'])) {
                        ?>
                            <div class="alert alert-success my-4"><?= $_SESSION['success']
                                                                    ?></div>
                        <?php
                            unset($_SESSION['success']);
                        }
                        ?>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-10 mt-3">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <h3>Tambahkan Data Mahasiswa</h3>
                                                <a href="data_pelajar.php" class="btn btn-primary">Daftar Mahasiswa</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form action="add-proccess.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="npm" class="form-label">NPM</label>
                                                        <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukan NPM Anda" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="kodemk" class="form-label">Kode Mata Kuliah</label>
                                                        <input type="text" name="kodemk" id="kodemk" class="form-control" placeholder="Masukan Kode Mata Kuliah Anda" required>
                                                    </div>
                                                    <div class="col-md-6 form-group mt-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Anda" required>
                                                    </div>
                                                    <div class="col-md-6 form-group mt-3">
                                                        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                                                        <input type="text" name="nama_matkul" id="namamk" class="form-control" placeholder="Masukan Nama Mata Kuliah Anda" required>
                                                    </div>
                                                </div>
                                                <button type="submit" name="add" class="btn btn-primary mt-3">Tambahkan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>