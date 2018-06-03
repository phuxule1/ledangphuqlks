<?php
	session_start();
	if(!isset($_SESSION['qlksAdmin'])) header("location:login_admin.php");
	include_once 'inc/header.php';
?>
	<nav class="navbar navbar-expand navbar-light bg-white">
		<button type="button" class="btn btn-sidebar" data-toggle="sidebar">
		  	<i class="fa fa-bars"></i>
		</button>
		<div class="navbar-brand">Quản Lý Khách Sạn Admin</div>
	</nav>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Quản Lý Phòng</li>
			<li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
		</ol>
	</nav>
	<div class="container-fluid">
		<h3>Welcome to Tour & Hotel Managerment Admin!</h3>
	</div>
	
<?php
	include_once 'inc/footer.php';
?>