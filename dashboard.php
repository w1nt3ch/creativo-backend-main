<?php
	session_start();
	if($_SESSION['status_login'] != true) {
		echo '<script>window.location="login.php"</script>';
	}
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
	<!--header-->
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
			<h3>Home</h3>
			<div class="box">
				<h4>WELKOME BACK<?php echo $_SESSION['a_global']->admin_name ?> di Creativo Digital Service</h4>

			</div>
		</div>
	</div>

	
</body>
</html>
