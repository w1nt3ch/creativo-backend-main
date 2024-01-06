<?php
//require "../controls/sanitize.php";

if(isset($_POST['ubah_password'])){			
    $pass1 	= $_POST['pass1'];
    $pass2 	= $_POST['pass2'];

    if(!chkLength($pass1, 4, 50)){
        echo '<script>alert("Password harus >4 dan <50 karakter")</script>';
    }
    else if($pass1 != $pass2){
        echo '<script>alert("Password ga sama")</script>';
    }
    else{
        $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                    password 	= '".hash('sha256', $pass1)."'
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