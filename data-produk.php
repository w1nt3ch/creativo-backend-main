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
					

				</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Produk</h3>
			<div class="box">
				<p><a href="tambah-produk.php">Add Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){


							while ($row = mysqli_fetch_array($produk)) {
							?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank">><img src="produk/<?php echo $row['product_image'] ?>" width="50px"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'False':'True'; ?></td>
							<td>
								<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> atau 
								<a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('DELETE ?')">DELETE</a>
							</td>
						</tr>
						<?php }}else{ ?>

							<tr>
								<td colspan="7">NOT FOUND</td>
							</tr>

							<?php } ?>
					</tbody>
					

				</table>
				

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
