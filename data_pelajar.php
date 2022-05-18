<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Data Pelajar</title>

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



</head>

<body>


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


        <?php
        session_start();
        ?>
        <div class="header-hero">
            <div class="container">
                <div class="row" style="padding-top: 120px">
                    <div class="col-md-12">
                        <?php
                        if (isset($_SESSION['success'])) {
                        ?>
                            <div class="alert alert-success my-4"><?= $_SESSION['success'] ?></div>
                        <?php
                            unset($_SESSION['success']);
                        }
                        ?>


                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if (isset($_GET['message'])) {
                                        $message = $_GET['message'];
                                    ?>
                                        <div class="alert alert-success my-4"><?= $message ?></div>
                                    <?php
                                    }
                                    ?>
                                    <div class="card border-10 mt-3">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <h3>Data Mahasiswa</h3>
                                                <a href="add.php" class=" btn btn-primary">Tambahkan Data</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <!-- # -->
                                                        <th>No</th>
                                                        <!-- Title -->
                                                        <th>Nama</th>
                                                        <!-- Content -->
                                                        <th>Keterangan</th>
                                                        <!-- Act  -->
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include "koneksi.php";
                                                    $no = 1;
                                                    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                                                    foreach ($query as $data) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $data['nama'] ?></td>
                                                            <td><?= $data['nama'] . " mengambil mata kuliah " . $data['nama_matkul'] . " (" . $data['jumlah_sks'] . " SKS)" ?></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                                                    <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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