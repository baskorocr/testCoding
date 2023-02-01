<?php
ob_start();
//koneksi
include("konfig.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari form tambah barang
    $merk = $_POST['merk'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
   
    // data yang diambil dari method dijadikan query
    $sql = "INSERT INTO hp (merk, deskripsi, jumlah, harga) VALUE ('$merk', '$deskripsi', '$jumlah', '$harga')";
    $query = mysqli_query($db, $sql);

    // // cek tambah apakah berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php admin dan data bertambah
        header('Location: admin/index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php admin dan data tidak bertambah
        header('Location: admin/index.php');
    }


} else {
    die("Akses dilarang...");
}

?>