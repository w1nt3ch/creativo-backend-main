<?php
	include "controls/cookie.php";
	include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creativo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!--header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Creativo</a></h1>
				<ul>
			
					<li><a href="dashboard.php">Home</a></li>
					<li><a href="profil.php">Identitas</a></li>
					<li><a href="data-kategori.php">Kategori</a></li>
					<li><a href="data-produk.php">Data Produk</a></li>
					<li><a href="keluar.php">Logout</a></li>

				</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Add Kategori</h3>
			<div class="box">				
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<<?php 
					if(isset($_POST['submit'])) {

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");

						if($insert){
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'gagal '.mysql_error($conn);
						}
					}
                ?>
			</div>
		</div>
	</div>

	
</body>
</html>
