<?php
ob_start();
//koneksi
include("konfig.php");

// cek tombol register apakah sudah diklik
if(isset($_POST['daftarAdmin'])){

    // mengambil data dari method kevariabel
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 

     // data yang didapat dijadikan query
    $sql = "INSERT INTO admins (username, password) VALUE ('$username', '$password')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php admin dengan status=sukses
        header('Location: admin/index.php?status=berhasil');
    } else {
        // kalau gagal alihkan ke halaman indek.php admin dengan status=gagal
        header('Location: admin/index.php?status=tidak');
    }


} else {
    die("Akses dilarang...");
}

?>