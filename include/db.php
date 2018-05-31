<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "qlkhachsan";
	$connect = mysqli_connect($servername, $username, $password) or die("Could not connect DB");
	mysqli_select_db($connect, $database) or die("Could not find DB!");
	mysqli_set_charset($connect, "utf8");
	if (mysqli_connect_errno()) {
		echo "Failed to connect MySQL".mysqli_connect_error();
	}
?>
