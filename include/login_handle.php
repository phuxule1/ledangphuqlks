<?php
	session_start();
	include "db.php";
	//get from form login
	$username = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['username']))));
	$password = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['password']))));
	$sql = "SELECT * FROM `taikhoan` WHERE USER_NAME='".$username."' AND PASSWORD='".$password."'";
	$run = mysqli_query($connect, $sql);
	if (mysqli_num_rows($run) > 0) {
		$row = mysqli_fetch_array($run);
		$arr = array('fullname' => $row['HOTEN'], 'username' => $row['USER_NAME'], 'roleid' => $row['ROLE_ID'], 'makh' => $row['MAKH']);
		$_SESSION["qlks_user"] = $arr;
		echo '<script type="text/javascript">alert("Đăng Nhập Thành Công");</script>';
		header("location:../pages/index.php");
	}else {
		echo '<script type="text/javascript">
			alert("Sai Tên Tài Khoản Hoặc Mật Khẩu");
			window.location = "../pages/register.php";
		</script>';
	}
?>
