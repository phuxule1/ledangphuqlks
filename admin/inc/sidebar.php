<?php
	if(isset($_SESSION['LegalAdmin'])){
		$admin_img = $_SESSION['LegalAdmin']['adminImg'];
		$admin_name = $_SESSION['LegalAdmin']['fullname'];
	}
?>
<div class="app-sidebar sidebar-slide-left">
	<div class="sidebar-header">
		<img src="images/profile.jpg" class="user-photo">
		<p class="username"> Admin <small>Administrator</small></p>
	</div>
	<div class="sidebar-nav" id="sidebar">
		<!-- <div class="sidebar-nav-btn"><a href="./index.php" class="btn btn-block btn-outline-light">Get started</a></div> -->
		<a href="./index.php" class="sidebar-nav-link"><i class="icon-home"></i>Trang chủ</a>
		<div class="sidebar-nav-group">
			<a href="#pet-controls" class="sidebar-nav-link collapsed" data-toggle="collapse" aria-expanded="false"><i class="icon-envelope-letter"></i>Hàng Hóa</a>
			<div id="pet-controls" class="collapse" data-parent="#sidebar">
				<a href="#" class="sidebar-nav-link">Danh sách</a>
				<a href="#" class="sidebar-nav-link">Blank page</a>
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
		<a href="#" data-toggle="tooltip" title="Logout">
			<i class="fa fa-power-off"></i>
		</a>
	</div>
</div>