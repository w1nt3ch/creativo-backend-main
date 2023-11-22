<?php
	//note: real database must use robust credentials. this is default for easy testing with xampp
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_creativo';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('ERROR: Failed to connect to $dbname');
 ?>
