<?php
    include 'koneksi.php';
    if (isset($_POST['add'])) {
    $npm           = $_POST['npm'];
    $nama          = $_POST['nama'];
    $jurusan       = $_POST['jurusan'];
    $alamat        = $_POST['alamat'];
    $kodemk        = $_POST['kodemk'];
    $nama_matkul   = $_POST['nama_matkul'];
    $jumlah_sks    = $_POST['jumlah_sks'];

        $query = mysqli_query($koneksi, "INSERT INTO mahasiswa 
        VALUES(NULL, '$npm','$nama','$jurusan','$alamat' ,'$kodemk', '$nama_matkul','$jumlah_sks')");

        if ($query) {
            $message = "Data berhasil ditambahkan";
            $message = urlencode($message);
            header("Location:data_pelajar.php?message={$message}");
        } 
        else {
            $message = "Data gagal ditambahkan";
            $message = urlencode($message);
            header("Location:add.php?message={$message}");
        }
    }
