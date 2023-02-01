
<?php

//berfung sebagai koneksi database
$server = "localhost";
$user = "id20236118_hpadmin";
$password = "cTKt{&GklAtld2%i";
$nama_database = "id20236118_hp";

$db = mysqli_connect($server, $user, $password, $nama_database);

//apabila tidak terhubung akan menampilkan pesan
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>