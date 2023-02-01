<?php
ob_start();
//koneksi
include("../konfig.php");

// cek tombol simpan apakah sudah diklik
if(isset($_POST['simpan'])){

    // mengambil data dari method kevariabel
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
   
    // data yang didapat dijadikan query
    $sql = "UPDATE hp SET merk='$merk', deskripsi='$deskripsi' , jumlah='$jumlah', harga='$harga' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // cek update apakah berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=success
        header('Location: index.php?status=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=fail
        header('Location: index.php?status=fail');
    }


} else {
    die("Akses dilarang...");
}

?>