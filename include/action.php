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
              <input type="number" class="destination search_input" required="required" min="1" max="100" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true">
            </div>
            <button class="button search_button">Tìm kiếm<span></span><span></span><span></span></button>';
    }
  }

  //================================ ....php ================================
?>
