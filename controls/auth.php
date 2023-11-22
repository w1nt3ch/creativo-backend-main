<?php
    session_start();
    require "../db.php";

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
	    $user = $conn->real_escape_string($_POST['user']);
		$pass = md5($conn->real_escape_string($_POST['pass'])); //escape and md5 the pass

        $query = "SELECT * FROM tb_admin WHERE username=? AND password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();

		if ($result->num_rows === 1){
			$row = $result->fetch_assoc();
			$_SESSION['status_login'] = true;
            $_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['admin_id'];
			header("Location: ../dashboard.php");
		}
        else{
			echo '<script> alert("ERROR: Wrong username/password!") </script>';
		}
	}		
?>	