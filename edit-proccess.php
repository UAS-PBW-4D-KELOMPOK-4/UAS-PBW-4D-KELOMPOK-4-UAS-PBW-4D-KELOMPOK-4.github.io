<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $npm           = $_POST['npm'];
    $id            = $_POST['id'];
    $nama          = $_POST['nama'];
    $jurusan       = $_POST['jurusan'];
    $alamat        = $_POST['alamat'];
    $kodemk        = $_POST['kodemk'];
    $nama_matkul   = $_POST['nama_matkul'];
    $jumlah_sks    = $_POST['jumlah_sks'];

 $query = mysqli_query($koneksi, "UPDATE mahasiswa SET 
 npm ='$npm', nama='$nama', jurusan='$jurusan', 
 alamat='$alamat',  kodemk='$kodemk', 
 nama_matkul='$nama_matkul', jumlah_sks='$jumlah_sks' WHERE id='$id'");

        if ($query) {
            $message = "Data berhasil diubah";
            $message = urlencode($message);
            header("Location:index.php?message={$message}");
        } else {
            $message = "Data gagal diubah";
            $message = urlencode($message);
            header("Location:add.php?message={$message}");
        }
    }


