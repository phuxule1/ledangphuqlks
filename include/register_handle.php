<?php
	session_start();
	include_once "db.php";
	$name = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_fullname']))));
	$username = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_username']))));
  $sex = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_selSex']))));
  $password = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_password']))));
	$email = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_emailAddr']))));
  $address = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_userAddr']))));
	$telephone = mysqli_real_escape_string($connect, trim(strip_tags(addslashes($_POST['regis_telephone']))));

	$makh = "KH";
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	for ($i = 0; $i < 3; $i++)
		$makh .= $characters[mt_rand(0, 61)];

	$sql = "INSERT INTO `taikhoan` (`MAKH`, `USER_NAME`, `PASSWORD`, `ROLE_ID`, `GIOITINH`, `HOTEN`, `DIACHI`, `SDT`, `EMAIL`) VALUES ('$makh', '$username', '$password', '2', '$sex', '$name', '$address', '$telephone', '$email')";
	if (mysqli_query($connect, $sql)) {
		echo '<script type="text/javascript">
			alert("Đã đăng ký tài khoản thành công!");
			window.location = "../pages/register.php";
		</script>';
	}else{
		echo 'Đã có lỗi xảy ra '.mysqli_error($connect);
	}
?>
