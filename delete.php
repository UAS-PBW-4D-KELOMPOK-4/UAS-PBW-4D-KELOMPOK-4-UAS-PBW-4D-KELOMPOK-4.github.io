<?php
if (isset($_GET['id'])) {
 include "koneksi.php";
 $id = $_GET['id'];
 $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
 if ($query) {
    $message = "Data berhasil dihapus";
    $message = urlencode($message);
    header("Location:data_pelajar.php?message={$message}");
 } 
 else {
    $message = "Data gagal dihapus";
    $message = urlencode($message);
    header("Location:add.php?message={$message}");
 }
}
