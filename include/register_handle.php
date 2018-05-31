<?php
	session_start();
	include_once "db.php";
	$name = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['name']))));
  $sex = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['selSex']))));
	$username = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['user_name']))));
  $password = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['password']))));
	$email = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['email']))));
  $address = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['diachi']))));
	$telephone = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['sodienthoai']))));


	$sql = "INSERT INTO `taikhoan` (`USER_NAME`, `PASSWORD`, `ROLE_ID`, `GIOITINH`, `HOTEN`, `DIACHI`, `SDT`, `EMAIL`) VALUES ('$username', '$password', '2', '$sex', '$name', '$address', '$telephone', '$email')";
	if (mysqli_query($connect, $sql)) {
		header("location:../pages/register.php");
	}else{
		echo 'Đã có lỗi xảy ra '.mysqli_error($connect);
	}
?>
