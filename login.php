<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login | Creativo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	</head>

	<body id="bg-login">
		<div class="box-login">
			<h2>Login</h2>
			<form action="controls/auth.php" method="POST">
				<input type="text" name="user" placeholder="Username" class="input-control">
				<input type="password" name="pass" placeholder="Password" class="input-control">
				<input type="submit" name="submit" value="Login" class="btn"> 
			</form>
		</div>
	</body>
</html>
