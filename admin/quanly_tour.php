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
				        <th>Địa Điểm Tour</th>
				        <th>SL Người</th>
				        <th>Ngày Đi</th>
				        <th>Ngày Về</th>
				        <th>Đơn Giá</th>
				        <th></th>
			      	</tr>
			    </thead>
			    <tbody id="lst_all_tour">
			      	<!-- <tr>
				        <td>1</td>
				        <td>TP.HCM - VŨNG TÀU</td>
				        <td>10</td>
				        <td>2018-06-15</td>
				        <td>2018-06-15</td>
				        <td>3,000,000 VNĐ</td>
				        <td>
				        	<div class="btn-group">
				        		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#">Sửa</a>
				        		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#">Xóa</a>
				        	</div>
				        </td>
			      	</tr> -->
			    </tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div id="modal_edit_del_tour" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" id="title_create">Xác Nhận Thêm</h4>
	      	<h4 class="modal-title" id="title_edit">Xác Nhận Sửa</h4>
	        <h4 class="modal-title" id="title_del">Xác Nhận Xóa</h4>
	        <button type="button" class="close close_modal" data-dismiss="modal" data-toggle="modal" data-target="#modal_edit_del_tour">&times;</button>
	      </div>
	      <div class="modal-body">
	      	<!-- Thêm tour -->
	      	<div id="create_tour">
	      		<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="text" id="input_diadiemtour" class="form-control custom_input" name="input_diadiemtour" placeholder="Nhập địa điểm tour" required>
      				<div class="clearfix"></div>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="number" id="input_soluongnguoi" class="form-control custom_input" name="input_soluongnguoi" placeholder="Nhập số lượng người tối đa" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngaydi" class="form-control custom_input" name="input_ngaydi" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngayve" class="form-control custom_input" name="input_ngayve" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="number" id="input_dongia" class="form-control custom_input" name="input_dongia" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true" placeholder="Nhập đơn giá tour" required>
      			</div>
	      	</div>
	      	<!-- Sửa Tour -->
	      	<div id="edit_tour">
      			<!-- <div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="text" id="input_diadiemtour" class="form-control custom_input" name="input_diadiemtour" placeholder="Nhập địa điểm tour" required>
      				<div class="clearfix"></div>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="text" id="input_soluongnguoi" class="form-control custom_input" name="input_soluongnguoi" placeholder="Nhập số lượng người tối đa" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngaydi" class="form-control custom_input" name="input_ngaydi" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngayve" class="form-control custom_input" name="input_ngayve" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="number" id="input_dongia" class="form-control custom_input" name="input_dongia" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true" placeholder="Nhập đơn giá tour" required>
      			</div> -->
	        </div>
	        <!-- Xóa tour -->
	        <div id="del_tour">
	        	<p>Bạn có chắc chắn muốn xóa không?</p>
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary" id="btn_confirm_create_tour" >Thêm</button>
	      	<button type="button" class="btn btn-primary" id="btn_confirm_edit_tour">Sửa</button>
	      	<button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_confirm_del_tour">Xóa</button>
	        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Đóng</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script src="js/quanly_tour.js"></script>
<?php
	include_once 'inc/footer.php';
?>