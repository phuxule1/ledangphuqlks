<?php
	session_start();
	include_once '../../include/db.php';

	if(isset($_POST['getListAllTourRequire'])){
		$i=0;
		$sql = "SELECT * FROM `tour`";
		$result = mysqli_query($connect, $sql);
		if(mysqli_num_rows($result) > 0){
			$i=0;
			while ($row = mysqli_fetch_assoc($result)) {
				$i++;
				echo '<tr>
				        <td>'.$i.'</td>
				        <td>'.$row['DIADIEMTOUR'].'</td>
				        <td>'.$row['SOLUONGNGUOI'].'</td>
				        <td>'.$row['NGAYDI'].'</td>
				        <td>'.$row['NGAYVE'].'</td>
				        <td>'.number_format($row['DONGIA'], 0, ".", ",").' VNĐ</td>
				        <td>
				        	<div class="btn-group">
				        		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_del_tour" id="btn_edit_tour" tourId="'.$row['MATOUR'].'">Sửa</a>
				        		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal_edit_del_tour" id="btn_del_tour" tourId="'.$row['MATOUR'].'">Xóa</a>
				        	</div>
				        </td>
			      	</tr>';
			}
		}
	}

	//get detail of a tour
	if(isset($_POST['getDetailTourRequire'])){
		$tour_id = $_POST['tourId'];
		$sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
		$result = mysqli_query($connect, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			echo '<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="text" id="input_diadiemtour" class="form-control custom_input" name="input_diadiemtour" placeholder="Nhập địa điểm tour" value="'.$row['DIADIEMTOUR'].'" required>
      				<div class="clearfix"></div>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      				<input type="number" id="input_soluongnguoi" class="form-control custom_input" name="input_soluongnguoi" placeholder="Nhập số lượng người tối đa" value="'.$row['SOLUONGNGUOI'].'" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngaydi" class="form-control custom_input" name="input_ngaydi" value="'.$row['NGAYDI'].'" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="date" id="input_ngayve" class="form-control custom_input" name="input_ngayve" value="'.$row['NGAYVE'].'" required>
      			</div>
      			<div class="input-group input_group_custom">
      				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
      				<input type="number" id="input_dongia" class="form-control custom_input" name="input_dongia" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true" placeholder="Nhập đơn giá tour" value="'.$row['DONGIA'].'" required>
      			</div>';
		}
	}

	//update a tour
	if(isset($_POST['updateTourRequire'])){
		$diadiemtour = $_POST['diadiemtour'];
		$soluongnguoi = $_POST['soluongnguoi'];
		$ngaydi = $_POST['ngaydi'];
		$ngayve = $_POST['ngayve'];
		$dongia = $_POST['dongia'];
		$tour_id = $_POST['tourId'];
		$sql = "UPDATE `tour` SET DIADIEMTOUR='$diadiemtour', SOLUONGNGUOI='$soluongnguoi', NGAYDI='$ngaydi', NGAYVE='$ngayve', DONGIA='$dongia' WHERE MATOUR='$tour_id'";
		if(!mysqli_query($connect, $sql)){
			echo mysqli_error($connect);
		}
	}

	//get updated tour
	if(isset($_POST['getUpdatedTour'])){
		$tour_id = $_POST['tourId'];
		$sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
		$result = mysqli_query($connect, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			echo '<td>'.$row['DIADIEMTOUR'].'</td>
		        <td>'.$row['SOLUONGNGUOI'].'</td>
		        <td>'.$row['NGAYDI'].'</td>
		        <td>'.$row['NGAYVE'].'</td>
		        <td>'.number_format($row['DONGIA'], 0, ".", ",").' VNĐ</td>
		        <td>
		        	<div class="btn-group">
		        		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_del_tour" id="btn_edit_tour" tourId="'.$row['MATOUR'].'">Sửa</a>
		        		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal_edit_del_tour" id="btn_del_tour" tourId="'.$row['MATOUR'].'">Xóa</a>
		        	</div>
		        </td>';
		}
	}

	//delete a tour
	if(isset($_POST['delTourRequire'])){
		$tour_id = $_POST['tourId'];
		$sql = "DELETE FROM `tour` WHERE MATOUR='$tour_id'";
		if(!mysqli_query($connect, $sql)){
			echo mysqli_error($connect);
		}
	}

	//create a tour
	if(isset($_POST['createTourRequire'])){
		$diadiemtour = $_POST['diadiemtour'];
		$soluongnguoi = $_POST['soluongnguoi'];
		$ngaydi = $_POST['ngaydi'];
		$ngayve = $_POST['ngayve'];
		$dongia = $_POST['dongia'];

		$tour_id = "T";
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	    for ($i = 0; $i < 4; $i++)
	        $tour_id .= $characters[mt_rand(0, 61)];

		$sql = "INSERT INTO `tour` (`MATOUR`, `DIADIEMTOUR`, `SOLUONGNGUOI`, `NGAYDI`, `NGAYVE`, `DONGIA`) VALUES ('$tour_id', '$diadiemtour', '$soluongnguoi', '$ngaydi', '$ngayve', '$dongia')";
		if(!mysqli_query($connect, $sql)){
			echo mysqli_error($connect);
		}
	}
?>