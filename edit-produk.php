<?php
	include "controls/cookie.php";
	include "db.php";

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	if(mysqli_num_rows($produk) == 0){
		header("Location: data-produk.php");
	}
	$p = mysqli_fetch_object($produk);
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creativo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
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
			<h3>Edit Data Produk</h3>
			<div class="box">				
				<form action="" method="POST" enctype="multipart/form-data">
					<select class="input-control" name="kategori" required>
						<option value="">--Pilih--</option>
						<?php 
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							while($r = mysqli_fetch_array($kategori)){
    						?>

							<option value="<?php echo $r['category_id'] ?>" <?php echo ($r['category_id'] == $p->category_id)? 'selected':''; ?>><?php echo $r['category_name'] ?></option>		
						 
						<?php } ?>
					</select>
					<input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?php echo $p->product_name ?>" required>
					<input type="text" name="harga" class="input-control" placeholder="Harga" value="<?php echo $p->product_price ?>" required>
					
					<img src="produk/<?php echo $p->product_image ?>" width="100px">
					<input type="hidden" name="foto" value="<?php echo $p->product_image  ?>">
					<input type="file" name="gambar" class="input-control">
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->product_description ?></textarea><br>
					<select class="input-control" name="status">
						<option value="">--Pilih--</option>
						<option value="1" <?php echo ($p->product_status == 1)? 'selected':''; ?>>Aktif</option> 
						<option value="0" <?php echo ($p->product_status == 0)? 'selected':''; ?>>Tidak Aktif</option> 
					</select>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
				// inget ya din, salah tanda tiitik , kurang dari atau lebih besar dari = FATAL
					if(isset($_POST['submit'])) {

						// data inputan dari form
						$kategori 	= $_POST['kategori'];
						$nama 		= $_POST['nama'];
						$harga	 	= $_POST['harga'];
						$deskripsi 	= $_POST['deskripsi'];
						$status 	= $_POST['status'];
						$foto	 	= $_POST['foto'];


						// data gambar yang baru
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];

						

						// validasi
						if($filename != ''){

							$type1 = explode('.', $filename);
							$type2 = $type1[1];

							$newname = 'produk'.time().'.'.$type2;

							// ini buat security file upoad tipe file nya

							$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

							//buat validasi lagi format file nya
							if(!in_array($type2, $tipe_diizinkan)) {

								// kalo format file tidak ada di dalam tipe diizinkan
								echo '<script>alert("Format file tidak diizinkan")</script>';

							}else{
								unlink('./produk/'.$foto);
								move_uploaded_file($tmp_name, './produk/' .$newname);
								$namagambar = $newname;

							}
								
						}else{
							
							$namagambar = $foto;


						}

						
						$update = mysqli_query($conn, "UPDATE tb_product SET
							category_id = '".$kategori."',
							product_name = '".$nama."',
							product_price = '".$harga."',
							product_description = '".$deskripsi."',
							product_image = '".$namagambar."',  
							product_status = '".$status."'
							WHERE product_id = '".$p->product_id."' ");

						if($update){
							echo '<script>alert("Alert! Update data success")</script>';
							echo '<script>window.location="data-produk.php"</script>';
						}else {
							echo 'gagal' .mysql_error($conn);							
						}

						
					}
                ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Creativo.</small>
	</footer>
	<script>
          CKEDITOR.replace( 'deskripsi' );
    </script>
</body>
</html>
