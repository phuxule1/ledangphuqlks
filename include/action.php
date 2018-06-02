<?php 
  session_start();
  include 'db.php';

  //================================ offers.php ================================
  if(isset($_POST['getTourForOffer'])){
    $sql = "SELECT * FROM `tour`";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_assoc($run_query)){
        echo '<p class="selTour" tourId="'.$row['MATOUR'].'">'.$row['DIADIEMTOUR'].'</p>';
      }
    }
  }

  if(isset($_POST['getTourInfo'])){
    $tour_id = $_POST['tourId'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo '<div class="search_item">
              <div>Ngày đi tour</div>
              <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD" disabled value="'.$row['NGAYDI'].'">
            </div>
            <div class="search_item">
              <div>Ngày kết thúc</div>
              <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD" disabled value="'.$row['NGAYVE'].'">
            </div>
            <button class="button search_button" id="search_tour">Tìm kiếm<span></span><span></span><span></span></button>';
    }
  }

  if(isset($_POST['getTourDetail'])){
    $tour_id = $_POST['tourId'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo '<div class="offers_item rating_4">
              <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-3 col-1680-4">
                  <div class="offers_image_container">
                    <div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
                    <div class="offer_name"><a href="single_listing.html">'.$row['DIADIEMTOUR'].'</a></div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="offers_content">
                    <div class="offers_price">'.number_format($row['DONGIA'], 0, ".", ",").' VNĐ<span>qua đêm</span></div>
                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                    </div>
                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                    <div class="offers_icons">
                      <ul class="offers_icons_list">
                        <li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
                      </ul>
                    </div>
                    <div class="button book_button"><a href="order.php?tourId='.$row['MATOUR'].'">Đặt Tour<span></span><span></span><span></span></a></div>
                    <div class="offer_reviews">
                      <div class="offer_reviews_content">
                        <div class="offer_reviews_title">very good</div>
                        <div class="offer_reviews_subtitle">100 reviews</div>
                      </div>
                      <div class="offer_reviews_rating text-center">8.1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
    }
  }

  if(isset($_POST['getListOfTour'])){
    $sql = "SELECT * FROM `tour` LIMIT 0,10";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_assoc($run_query)){
        echo '<div class="offers_item rating_4">
              <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-3 col-1680-4">
                  <div class="offers_image_container">
                    <div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
                    <div class="offer_name"><a href="single_listing.html">'.$row['DIADIEMTOUR'].'</a></div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="offers_content">
                    <div class="offers_price">'.number_format($row['DONGIA'], 0, ".", ",").' VNĐ<span>qua đêm</span></div>
                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                    </div>
                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                    <div class="offers_icons">
                      <ul class="offers_icons_list">
                        <li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
                      </ul>
                    </div>
                    <div class="button book_button"><a href="order.php?tourId='.$row['MATOUR'].'">Đặt Tour<span></span><span></span><span></span></a></div>
                    <div class="offer_reviews">
                      <div class="offer_reviews_content">
                        <div class="offer_reviews_title">very good</div>
                        <div class="offer_reviews_subtitle">100 reviews</div>
                      </div>
                      <div class="offer_reviews_rating text-center">8.1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
      }
    }
  }

  //================================== Đặt phòng ==============================
  if(isset($_POST['findRoomRequire'])){
    $diadiem = $_POST['diachitimkiem'];
    $sql = "SELECT * FROM `khach_san` WHERE ten_KS LIKE '%$diadiem%'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_assoc($run_query)){
        $maks = $row['ma_KS'];
        $sql_phong = "SELECT * FROM `phong` WHERE ma_KS='$maks'";
        $run_query_phong = mysqli_query($connect, $sql_phong);
        while ($row_phong = mysqli_fetch_assoc($run_query_phong)) {
            echo '<div class="offers_item rating_4">
              <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-3 col-1680-4">
                  <div class="offers_image_container">
                    <div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
                    <div class="offer_name"><a href="single_listing.html">'.$row['ten_KS'].'</a></div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="offers_content">
                    <div class="offers_price">'.number_format($row_phong['gia'], 0, ".", ",").' VNĐ<span>qua đêm</span></div>
                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                    </div>
                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                    <div class="offers_icons">
                      <ul class="offers_icons_list">
                        <li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
                      </ul>
                    </div>
                    <div class="button book_button"><a href="order_room.php?roomId='.$row_phong['ma_phong'].'&ksId='.$maks.'">Đặt Phòng<span></span><span></span><span></span></a></div>
                    <div class="offer_reviews">
                      <div class="offer_reviews_content">
                        <div class="offer_reviews_title">very good</div>
                        <div class="offer_reviews_subtitle">100 reviews</div>
                      </div>
                      <div class="offer_reviews_rating text-center">8.1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
        }
      }
    }
  }

  if(isset($_POST['getListOfRoom'])){
    $sql = "SELECT * FROM `khach_san`";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_assoc($run_query)){
        $maks = $row['ma_KS'];
        $sql_phong = "SELECT * FROM `phong` WHERE ma_KS='$maks'";
        $run_query_phong = mysqli_query($connect, $sql_phong);
        while ($row_phong = mysqli_fetch_assoc($run_query_phong)) {
            echo '<div class="offers_item rating_4">
              <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-3 col-1680-4">
                  <div class="offers_image_container">
                    <div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
                    <div class="offer_name"><a href="single_listing.html">'.$row['ten_KS'].'</a></div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="offers_content">
                    <div class="offers_price">'.number_format($row_phong['gia'], 0, ".", ",").' VNĐ<span>qua đêm</span></div>
                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                    </div>
                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                    <div class="offers_icons">
                      <ul class="offers_icons_list">
                        <li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
                        <li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
                      </ul>
                    </div>
                    <div class="button book_button"><a href="order_room.php?roomId='.$row_phong['ma_phong'].'&ksId='.$maks.'">Đặt Phòng<span></span><span></span><span></span></a></div>
                    <div class="offer_reviews">
                      <div class="offer_reviews_content">
                        <div class="offer_reviews_title">very good</div>
                        <div class="offer_reviews_subtitle">100 reviews</div>
                      </div>
                      <div class="offer_reviews_rating text-center">8.1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
        }
      }
    }
  }

  //================================ order.php ================================
  if(isset($_POST['getTourNameRequire'])){
    $tour_id = $_POST['tourId'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo $row['DIADIEMTOUR'];
    }
  }

  if(isset($_POST['getTourNgaydiRequire'])){
    $tour_id = $_POST['tourId'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo $row['NGAYDI'];
    }
  }

  if(isset($_POST['getTourNgayveRequire'])){
    $tour_id = $_POST['tourId'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo $row['NGAYVE'];
    }
  }

  if(isset($_POST['getTotalRequire'])){
    $tour_id = $_POST['tourId'];
    $soluong = $_POST['soluong'];
    $sql = "SELECT * FROM `tour` WHERE MATOUR='$tour_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo number_format($row['DONGIA']*$soluong, 0, ".", ",").' VNĐ';
    }
  }

  if(isset($_POST['saveTourRequire'])){
    $makh = $_SESSION["qlks_user"]["makh"];
    $tour_id = $_POST['tourId'];
    $soluong = $_POST['soluong'];

    //insert to table hdban
		$pre_bill_id = "MH";
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < 3; $i++)
        $pre_bill_id .= $characters[mt_rand(0, 61)];
    $sql = "INSERT INTO `dondattour` (`MaDH`, `TINHTRANG`, `SOLUONGNGUOI`, `MAKH`) VALUES ('$pre_bill_id', 0, '$soluong','$makh' )";
    if(mysqli_query($connect, $sql)){
      date_default_timezone_set("Asia/Ho_Chi_Minh");
	    $date = date('Y-m-d', time());
      $sql = "INSERT INTO `chitiethoadon` (`MaDH`, `MATOUR`, `NGAYDAT`) VALUES ('$pre_bill_id', '$tour_id','$date') ";
      if(!mysqli_query($connect, $sql)){
        echo mysqli_error($connect);
      }else echo 'Đơn đặt tour thành công, nhân viên cửa hàng sẽ liên hệ quý khách sớm nhất. Xin chân thành cảm ơn!!!';
    }else echo mysqli_error($connect);
  }

  //================================ order_room.php ================================
  if(isset($_POST['getRoomHotelRequire'])){
    $room_id = $_POST['roomId'];
    $sql = "SELECT * FROM `phong` WHERE ma_phong='$room_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      $maks = $row['ma_KS'];
      $sql_ks = "SELECT * FROM `khach_san` WHERE ma_KS='$maks'";
      $run_query_ks = mysqli_query($connect, $sql_ks);
      $row_ks = mysqli_fetch_assoc($run_query_ks);
      echo "Mã phòng ".$row['ma_phong'].' - '.$row_ks['ten_KS'];
    }
  }

  if(isset($_POST['getTotalRoomRequire'])){
    $room_id = $_POST['roomId'];
    $soluong = $_POST['soluong'];
    $sql = "SELECT * FROM `phong` WHERE ma_phong='$room_id'";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      $row = mysqli_fetch_assoc($run_query);
      echo number_format($row['gia']*$soluong, 0, ".", ",").' VNĐ';
    }
  }

  if(isset($_POST['saveOrderRoomRequire'])){
    $makh = $_SESSION["qlks_user"]["makh"];
    $room_id = $_POST['roomId'];
    $ks_id = $_POST['ksId'];
    $soluong = $_POST['soluong'];
    $ngaykhachdi = $_POST['ngaydi'];
    $ngaykhachden = $_POST['ngayden'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $ngaykhachdat = date('Y-m-d', time());
    
    //insert to table hdban
    $pre_bill_id = "HD";
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < 3; $i++)
        $pre_bill_id .= $characters[mt_rand(0, 61)];
    $sql = "INSERT INTO `hoa_don` (`ma_HD`, `ma_KH`, `ngay_dat`, `ngay_den`, `ngay_di`) VALUES ('$pre_bill_id', '$makh', '$ngaykhachdat', '$ngaykhachden', '$ngaykhachdi')";
    if(mysqli_query($connect, $sql)){
      $sql = "INSERT INTO `chitietdatphong` (`ma_HD`, `ma_KS`, `ma_phong`, `SL`, `ngay_den`, `ngay_di`) VALUES ('$pre_bill_id', '$ks_id','$room_id', '$soluong', '$ngaykhachden', '$ngaykhachdi') ";
      if(!mysqli_query($connect, $sql)){
        echo mysqli_error($connect);
      }else echo 'Đơn đặt phòng thành công, nhân viên cửa hàng sẽ liên hệ quý khách sớm nhất. Xin chân thành cảm ơn!!!';
    }else echo mysqli_error($connect);
  }
?>
