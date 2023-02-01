<?php
ob_start();
//koneksi
include("../konfig.php");

//cek id request method
if( isset($_GET['id']) ){

    // ambil id dari method stirng
    $id = $_GET['id'];

    // menjadikan varible id sebagai query
    $sql = "DELETE FROM hp WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // cek penghapusan apakah berhasil
    if( $query ){
        //jika berhasil menghapus
        header('Location: index.php?status=sukses');
    } else {
        //jika gagal menghapus
        header('Location: index.php?status=gagal');
    }

} else {
    die("akses dilarang...");
}

?>