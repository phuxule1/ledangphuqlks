<?php
	session_start();
	include "db.php";

	$name = $_POST['contact_form_name'];
	$email = $_POST['contact_form_email'];
	$problem = $_POST['contact_form_subject'];
	$msg = $_POST['message'];

	$matn = "TN";
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < 3; $i++)
        $matn .= $characters[mt_rand(0, 61)];

 	$sql = "INSERT INTO `contact` VALUES ('$matn', '$name', '$email', '$problem', '$msg')";
    if(!mysqli_query($connect, $sql)){
    	echo mysqli_error($connect);
    }else {
    	echo '<script>
    		alert("Chúng tôi cảm ơn bạn đã gửi phản hồi. Cảm ơn. (Mệt quá!!!)");
    		location.href = "../pages/contact.php";
    	</script>';
    }
?>