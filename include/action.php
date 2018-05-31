<?php include 'db.php';

  if(isset($_POST['getTourForOffer'])){
    $sql = "SELECT * FROM `tour`";
    $run_query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($run_query) > 0){
      while($row = mysqli_fetch_assoc($run_query)){
        echo '<a href="#about" class="selTour">'.$row['DIADIEMTOUR'].'</a>';
      }
    }
  }
?>
