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
	
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Creativo</a></h1>
				<ul>
			
					<li><a href="dashboard.php">Home</a></li>
					

				</ul>
		</div>
	</header>

	
	<div class="section">
		<div class="container">
			<h3>Kategori</h3>
			<div class="box">
				<p><a href="tambah-kategori.php">Add kategori</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th width="150px">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							if(mysqli_num_rows($kategori) > 0){


							while ($row = mysqli_fetch_array($kategori)) {
							?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td>
								<a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> atau 
								<a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('DELETE ?')">DELETE</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Not Found</td>
							</tr>

						<?php } ?>
					</tbody>
					

				</table>
				

			</div>
		</div>
	</div>

	
</body>
</html>
