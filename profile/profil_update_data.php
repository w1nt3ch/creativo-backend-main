<?php
	if(isset($_POST['submit'])){
		$nama 	= ucwords($_POST['nama']);
		$user 	= $_POST['user'];
		$hp 	= $_POST['hp'];
		$email	= $_POST['email'];
		$alamat = ucwords($_POST['alamat']);

		$update = mysqli_query($conn, "UPDATE tb_admin SET 
			admin_name = '".$nama."',
			username = '".$user."',
			admin_telp = '".$hp."',
			admin_email 	= '".$email."',
			admin_address 	= '".$alamat."'
			WHERE admin_id 	= '".$d->admin_id."' "
		);
		
		if($update){
			echo '<script>alert("Alert! Update data succses")</script>';
			header("Location: /profil.php");
		}
		else{
			echo "gagal" .mysql_error($conn);
		}

	}
?>