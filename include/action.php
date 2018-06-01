<?php include 'db.php';

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
            <div class="search_item">
              <div>Số người đi</div>
              <input type="number" class="destination search_input" id="number_people" required="required" min="1" max="100" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true">
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
                    <div class="button book_button"><a href="#" tourId="'.$row['MATOUR'].'">Đặt Tour<span></span><span></span><span></span></a></div>
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
                    <div class="button book_button"><a href="#" tourId="'.$row['MATOUR'].'">Đặt Tour<span></span><span></span><span></span></a></div>
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

  //================================ ....php ================================
?>
