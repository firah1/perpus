<?php
include_once("koneksi.php");
    // Check If form submitted, insert form data into users table.
    $id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM siswa WHERE id_siswa='$id'";
    $hasil_query = mysqli_query($koneksi, $query);
    
        header("location:siswa.php");
    
    ?>