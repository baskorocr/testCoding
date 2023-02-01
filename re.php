<?php 
//koneksi
include("konfig.php");
//memulai session


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
    <header class="masthead" style="background-color:#ffffff">
            <div class="container " >
            <table class="table text" >
            <thead>
                <tr>
                <th scope="col">ID HP</th>
                <th scope="col">merk</th>
                <th scope="col">deskripsi</th>
                <th scope="col">jumlah</th>
                <th scope="col">harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- berfungsi menampilkan data hp-->
            <?php
                    $sql = "SELECT * FROM hp";
                    $query = mysqli_query($db, $sql);
                    while($hp = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td class='id'>".$hp['id']."</td>";
                        echo "<td class='merk'>".$hp['merk']."</td>";
                        echo "<td class='deskripsi'>".$hp['deskripsi']."</td>";
                        echo "<td class='jumlah'>".$hp['jumlah']."</td>";
                        echo "<td class='harga'>".$hp['harga']."</td>";
                        echo "<td>";
                        
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                
            </tbody>
            </table>
       
            </div>
        </header>
</body>
</html>