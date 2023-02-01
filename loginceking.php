<?php 
ob_start();
    //koneksi
    include("konfig.php");
 
    //mengambil data dari method login, lalu dijadikan variable
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //memasukan variable pada query
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $query = mysqli_query($db, $sql);

    //ceking apakah data ada di database
    $cek = mysqli_num_rows($query);
 
    if($cek > 0){
        //membuat session
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/");
    }
    else{
        //jika gagal akan kembali ke index.php
        header("location:index.php"); 
    }
?>