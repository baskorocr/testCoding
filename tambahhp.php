<?php 
//memulai session
session_start();
//koneksi
include("konfig.php"); 


//cek session
if(!isset($_SESSION["username"]))
{
 header("location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Tambah HP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="csslogin/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	
		      	<h3 class="text-center mb-4">Tambah Data HP</h3>
						<form action="tambahceking.php" method="post" class="login-form" onSubmit="return validasi()">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="merk" id="merk" placeholder="Merk" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="text" class="form-control rounded-left" name="deskripsi" id="deskrips" placeholder="Deskripsi" required>
	            </div>
				<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="jumlah" id="jumlah" placeholder="Jumlah" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="harga" id="harga" placeholder="harga" required>
		      		</div>
					
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" type="submit" value="Tambah" name="tambah">Tambah</button>
	            </div>
				
	          
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

