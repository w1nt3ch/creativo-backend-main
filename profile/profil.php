<?php
	include "../controls/cookie.php";
	include "../db.php";

	$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creativo</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
			<h3>Input Data</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
					<input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp ?>" required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address ?>" required>
					<input type="submit" name="submit" value="Update Data" class="btn">
				</form>
				<?php include "profil_update_data.php" ?>
			</div>

			<h3>Ubah Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
					<input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
					<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
				</form>
				<?php
					if(isset($_POST['ubah_password'])){

					
						$pass1 	= $_POST['pass1'];
						$pass2 	= $_POST['pass2'];

						if($pass2 != $pass2){
							echo '<script>alert("Password ga sama")</script>';

						}else{
							//masih ada yg error dibagian alert konfirmasi password tidak sesuai masih belom work

							$u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
										password 	= '".MD5($pass1)."'
										WHERE admin_id 	= '".$d->admin_id."' ");
							if($u_pass){
								echo '<script>alert("Alert! Update data succses")</script>';
								echo '<script>window.location="profil.php"</script>';
							}else{
								echo 'gagal' .mysql_error($conn);
							}

						}
					}
				 ?>
			</div>
		</div>
	</div>

	<!-- foater -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Creativo.</small>
	</footer>
</body>
</html>
