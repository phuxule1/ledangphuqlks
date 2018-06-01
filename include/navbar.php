<?php
  
?>
<link rel="stylesheet" type="text/css" href="../styles/custom.css">
<!-- Header -->
<header class="header">

  <!-- Top Bar -->
  <div class="top_bar">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-row">
          <div class="phone">01672.139.447</div>
          <div class="user_box ml-auto">
            <!-- ktra dang nhap hay chua? -->
            <?php
              if(isset($_SESSION['qlks_user'])){?>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle btn_user" type="button" data-toggle="dropdown">
                    Xin chào, <?php echo $_SESSION['qlks_user']['fullname']; ?>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Thông tin cá nhân</a></li>
                    <li><a href="#">Đổi mật khẩu</a></li>
                    <li><a href="../include/logout_handle.php">Đăng xuất</a></li>
                  </ul>
                </div>
            <?php  }else{?>
                <div class="user_box_login user_box_link"><a href="register.php">Đăng nhập</a></div>
                <div class="user_box_register user_box_link"><a href="register.php">Đăng ký</a></div>
            <?php  }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->
  <nav class="main_nav">
    <div class="container">
      <div class="row">
        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
          <div class="logo_container">
            <div class="logo"><a href="../pages/index.php"><img src="../images/logo_new.png" alt="">travelix</a></div>
          </div>
          <div class="main_nav_container ml-auto">
            <ul class="main_nav_list">
              <li class="main_nav_item"><a href="../pages/index.php">Trang chủ</a></li>
              <li class="main_nav_item"><a href="../pages/about.php">Giới thiệu</a></li>
              <li class="main_nav_item"><a href="../pages/offers.php">Dịch vụ</a></li>
              <li class="main_nav_item"><a href="../pages/blog.php">Tin tức</a></li>
              <li class="main_nav_item"><a href="../pages/contact.php">Liên hệ</a></li>
            </ul>
          <div class="hamburger">
            <i class="fa fa-bars trans_200"></i>
          </div>
        </div>
      </div>
    </div>
  </nav>

</header>

<div class="menu trans_500">
  <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
    <div class="menu_close_container"><div class="menu_close"></div></div>
    <div class="logo menu_logo"><a href="#"><img src="../images/logo_new.png" alt=""></a></div>
    <ul class="main_nav_list">
      <li class="main_nav_item"><a href="#">Trang chủ</a></li>
      <li class="main_nav_item"><a href="about.html">Giới thiệu</a></li>
      <li class="main_nav_item"><a href="offers.html">Dịch vụ</a></li>
      <li class="main_nav_item"><a href="blog.html">Tin tức</a></li>
      <li class="main_nav_item"><a href="contact.html">Liên hệ</a></li>
    </ul>
  </div>
</div>
