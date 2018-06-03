<?php
	session_start();
	include_once '../../include/db.php';

	//get from form login
	$username = mysqli_escape_string($connect, $_POST['username']);
	$password = mysqli_escape_string($connect, $_POST['password']);
	if($username == null || $username == "")
		header('location:../login_admin.php');
	
	$sql = "SELECT * FROM taikhoan WHERE USER_NAME='".$username."' AND PASSWORD='".$password."'";
	$run = mysqli_query($connect, $sql);
	if (mysqli_num_rows($run) > 0) {
		$row = mysqli_fetch_assoc($run);
		$role_id = $row['ROLE_ID'];
		if($role_id == 1){
			$arr = array('fullname' => $row['HOTEN'], 'makh' => $row['MAKH'], 'roleid' => $row['ROLE_ID']);
			$_SESSION["qlksAdmin"] = $arr;
			echo '<script type="text/javascript">alert("Đăng Nhập Thành Công"); console_log("'.$_SESSION['qlksAdmin']['fullname'].'");</script>';
			header("location:../index.php");
		}else{
			echo '<script type="text/javascript">
				alert("Bạn Không Đủ Quyền Để Truy Cập Trang Này");
				window.location = "../login_admin.php";
			</script>';
		}
	}else {
		echo '<script type="text/javascript">
			alert("Sai Tên Tài Khoản Hoặc Mật Khẩu");
			window.location = "../login_admin.php";
		</script>';
	}
?>