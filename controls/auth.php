<?php
    session_start();
    require "../db.php";
    require "sanitize.php";

    $error = 0;

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
	    $user = $_POST['user'];
        if(!chkLength($user, 4, 20)){$error++;}
		else{$user = sanitize($user);}

		$pass = $_POST['pass'];
        if(!chkLength($pass, 4, 20)){$error++;}
		else{
            $pass = sanitize($pass);
            $pass = hash('sha256', $pass);
        }

        if($error < 1){
            $query = "SELECT * FROM tb_admin WHERE username=? AND password=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
            $conn->close();

		    if ($result->num_rows === 1){
			    $row = $result->fetch_assoc();
			    $_SESSION['status_login'] = TRUE;
                $_SESSION['username'] = $row['username'];
			    $_SESSION['id'] = $row['admin_id'];
			    header("Location: ../dashboard.php");
		    }
            else{$error++;}
        }
		
        if($error > 0){
            echo '<script> alert("ERROR: Wrong username/password!") </script>';
            header("Location: ../login.php");
        }
	}
    else{header("Location: ../login.php");}
?>	