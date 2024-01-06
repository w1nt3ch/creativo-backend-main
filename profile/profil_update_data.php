<?php
	include "../controls/sanitize.php";

	if(isset($_POST['submit'])){
		$error = 0;
		$nama	= ucwords($_POST['nama']);
		if(!chkLength($nama, 4, 20)){$error++; echo "error";}
		else{$nama = sanitize($nama);}
		
		$user 	= $_POST['user'];
		if(!chkLength($user, 4, 20)){$error++; echo "error";}
		else{$user = sanitize($user);}

		$hp 	= $_POST['hp'];
		if(!chkLength($hp, 4, 20)){$error++; echo "error";}
		else{$hp = sanitize($hp);}

		$email	= $_POST['email'];
		if(!chkLength($email, 4, 50)){$error++; echo "error";}
		else{$email = sanitize($email);}

		$alamat = ucwords($_POST['alamat']);
		if(!chkLength($alamat, 4, 200)){$error++; echo "error";}
		else{$alamat = sanitize($alamat);}
		
		if($error < 1){
			$update = mysqli_query($conn, "UPDATE tb_admin SET 
				admin_name		= '".$nama."',
				username 		= '".$user."',
				admin_telp 		= '".$hp."',
				admin_email 	= '".$email."',
				admin_address 	= '".$alamat."'
				WHERE admin_id 	= '".$d->admin_id."' "
			);

			if($update){
				echo '<script>alert("Alert! Update data succses")</script>';
				header("Location: profil.php");
			}
			else{$error++; echo "error";}
		}

		if($error > 0){ echo "gagal"; }
	}
?>