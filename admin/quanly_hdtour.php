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
			<li class="breadcrumb-item">Quản Lý Tour</li>
			<li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
			<li><button class="btn btn-primary btn_create_custom" id="btn_create_tour" data-toggle="modal" data-target="#modal_edit_del_tour">Thêm Tour</button></li>
		</ol>
	</nav>
	<div class="container-fluid">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
			      	<tr>
				        <th>#</th>
				        <th>Mã đơn đặt</th>
				        <th>Tình trạng</th>
				        <th>Số người</th>
				        <th>Tên khách hàng</th>
				        <th></th>
			      	</tr>
			    </thead>
			    <tbody id="getListHDTour">
			      	<!-- <tr>
				        <td>1</td>
				        <td>TP.HCM - VŨNG TÀU</td>
				        <td><input type="checkbox" id=""/></td>
				        <td>2</td>
				        <td>HHHHHHHHHH</td>
				        <td>
				        	<div class="btn-group">
				        		<a href="#" class="btn btn-primary" >Sửa</a>
				        		<a href="#" class="btn btn-danger" >Xóa</a>
				        	</div>
				        </td>
			      	</tr> -->
			    </tbody>
			</table>
		</div>
	</div>

	<script src="js/quanly_hdtour.js"></script>
<?php
	include_once 'inc/footer.php';
?>
