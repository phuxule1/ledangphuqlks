<?php
  session_start();
  unset($_SESSION["qlks_user"]);
  header("location:../pages/index.php");
?>
