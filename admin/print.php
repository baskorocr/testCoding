<?php 
session_start();
//koneksi
include("../konfig.php");



//cek session
if(!isset($_SESSION["username"]))
{
 header("location:../login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    <center>
        <h2> Print Data HP</h2>
        <hr />
    </center>
    <table class="table text mt-5 ">
            <thead>
                <tr>
                <th scope="col">ID HP</th>
                <th scope="col">merk</th>
                <th scope="col">deskripsi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
             
                </tr>
            </thead>
            <tbody>
                <!-- berfungsi menampilkan data-->
            <?php
            
                    $sql = "SELECT * FROM hp";
                    $query = mysqli_query($db, $sql);
                    while($hp = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$hp['id']."</td>";
                        echo "<td>".$hp['merk']."</td>";
                        echo "<td>".$hp['deskripsi']."</td>";
                        echo "<td>".$hp['jumlah']."</td>";
                        echo "<td>".$hp['harga']."</td>";

                        echo "<td>";
                       
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                
            </tbody>
            </table>
       
    <!-- berfungsi untuk memprint data -->
    <script>
        
        window.print();
    </script>
</body>
</html>