<?php
//membuat koneksi database
include("../konfig.php");

// cek kondisi apakah id ada dalam methode string query
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query lalu memasukan kedalam varible
$id = $_GET['id'];

// variable id dijadikan query
$sql = "SELECT * FROM hp WHERE id=$id";
$query = mysqli_query($db, $sql);
$hp = mysqli_fetch_assoc($query);

// ceking data yang di edit apakah ada
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
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
	
	<link rel="stylesheet" href="../csslogin/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
					
		      	<h3 class="text-center mb-4">Edit Data HP</h3>
						<form action="editceking.php" method="post" class="login-form" onSubmit="return validasi()">
		      		<div class="form-group">
					  <input type="text" class="form-control rounded-left" name="id" id="id" placeholder="Merk" value="<?php echo $hp['id'] ?>">
		      			<input type="text" class="form-control rounded-left" name="merk" id="merk" placeholder="Merk" value="<?php echo $hp['merk'] ?>" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="text" class="form-control rounded-left" name="deskripsi" id="deskrips" placeholder="Deskripsi" value="<?php echo $hp['deskripsi'] ?>" required>
	            </div>
				<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $hp['jumlah'] ?>" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="harga" id="harga" placeholder="harga" value="<?php echo $hp['harga'] ?>" required>
		      		</div>
					
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" type="submit" value="simpan" name="simpan">simpan</button>
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