<?php
	if(isset($_SESSION['qlksAdmin'])){
		//$admin_img = $_SESSION['qlksAdmin']['adminImg'];
		$admin_name = $_SESSION['qlksAdmin']['fullname'];
	}
?>
<div class="app-sidebar sidebar-slide-left">
	<div class="sidebar-header">
		<img src="images/profile.jpg" class="user-photo">
		<p class="username"> <?php echo $admin_name; ?> <small>Administrator</small></p>
	</div>
	<div class="sidebar-nav" id="sidebar">
		<!-- <div class="sidebar-nav-btn"><a href="./index.php" class="btn btn-block btn-outline-light">Get started</a></div> -->
		<a href="./index.php" class="sidebar-nav-link"><i class="icon-home"></i>Trang chủ</a>
		<div class="sidebar-nav-group">
			<a href="#pet-controls" class="sidebar-nav-link collapsed" data-toggle="collapse" aria-expanded="false"><i class="icon-envelope-letter"></i>Tour</a>
			<div id="pet-controls" class="collapse" data-parent="#sidebar">
				<a href="quanly_tour.php" class="sidebar-nav-link">Quản Lý Tour</a>
				<a href="quanly_hdtour.php" class="sidebar-nav-link">Hóa Đơn Tour</a>
			</div>
		</div>
		<div class="sidebar-nav-group">
			<a href="#pet-controls" class="sidebar-nav-link collapsed" data-toggle="collapse" aria-expanded="false"><i class="icon-envelope-letter"></i>Phòng</a>
			<div id="pet-controls" class="collapse" data-parent="#sidebar">
				<a href="#" class="sidebar-nav-link">Quản Lý Phòng</a>
				<a href="#" class="sidebar-nav-link">Hóa Đơn Phòng</a>
			</div>
		</div>
	</div>
	<div class="sidebar-footer">
		<a href="#" data-toggle="tooltip" title="GitHub">
			<i class="fa fa-github"></i>
		</a>
		<a href="#" data-toggle="tooltip" title="Settings">
			<i class="fa fa-cog"></i>
		</a>
		<a href="handle/logout_handle.php" data-toggle="tooltip" title="Logout">
			<i class="fa fa-power-off"></i>
		</a>
	</div>
</div>