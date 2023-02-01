<?php
//memulai session
session_start();
//menghapus session login yang ada
unset($_SESSION['username']);
header("location:../index.php");
?>