<?php
	session_start();
	if(isset($_SESSION['qlksAdmin'])){
		unset($_SESSION["qlksAdmin"]);
		header("location:../login_admin.php");
	}
?>