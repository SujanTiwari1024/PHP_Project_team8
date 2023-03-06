<?php 
$title = "Reservation";
include'header.php'; ?>

<!-- Reservation form -->
<form method="post" style="margin: 12rem auto; width: 50%; font-size: 1rem;">

      <?php

        $UserId = "z.seyedi@gmail.com";
        include 'db.php';
        $sql = "select customerId, fName, lName, phoneNum from customer Where email='$UserId'";
        
        $result = $conn->query($sql);
        $customerId = "";
        if($result->num_rows == 1){
          
          $row = $result -> fetch_assoc();
          $customerId = $row['customerId'];
          //echo" <table class = 'table'>
          echo" Reseve for Customer: $row[fName] $row[lName] <br><br> phone number: $row[phoneNum] <br><br>";
  
        }
        if(isset($_POST['submit']))
          {
            //$date = $_POST['date']; // the date to compare, in YYYY-MM-DD format

            //$currentDate = new DateTime(); // get the current date and time
            //$compareDate = new DateTime($date); // create a DateTime object from the $date string
            
            // if ($compareDate > $currentDate) {
              $reservationDate=$_POST['date'];
              $reservationTime=$_POST['time'];  
              $numGuests=$_POST['num_guests']; 

              $sql="insert into reservation(reservationDate, reservationTime, customerId, numGuests)
                  values('$reservationDate','$reservationTime','$customerId','$numGuests')";
              if($conn->query($sql)===TRUE){ 
                echo" ";}
              else{
                echo" <h5> Reservation failed </h5>";
              }  
            //} else {
            //  echo 'The date is not valid';
            //}
            
          }
      ?>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required><br><br>
        
            <label for="time">Time:</label><br>
            <input type="time" id="time" name="time" min="17:00" max="22:00" required><br><br>

            <label for="num_guests">Number of Guests:</label><br>
            <input type="number" id="num_guests" name="num_guests" min="1" max="10" required><br><br>
        
            <input type="submit" name="submit" value="Reserve">
        </form>

        <?php 
          if(isset($_POST['submit']) && $conn->query($sql)===TRUE) { 
            echo" <h5> Reserved Successfully </h5>"; 
          }
        ?>

<?php include'footer.php'; ?>
