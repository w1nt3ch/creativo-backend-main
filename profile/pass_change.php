<?php
if(isset($_POST['ubah_password'])){			
    $pass1 	= $_POST['pass1'];
    $pass2 	= $_POST['pass2'];

    if($pass2 != $pass2){
        echo '<script>alert("Password ga sama")</script>';
    }
    else{
        //masih ada yg error di bagian alert konfirmasi password tidak sesuai masih belom work
        $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                    password 	= '".MD5($pass1)."'
                    WHERE admin_id 	= '".$d->admin_id."' ");
        if($u_pass){
            echo '<script>alert("Alert! Update data succses")</script>';
            echo '<script>window.location="profil.php"</script>';
        }
        else{
            echo 'gagal' .mysql_error($conn);
        }
    }
}
?>