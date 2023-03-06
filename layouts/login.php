<?php
$title = "login";
include "header.php";?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <?php
      $error = '';
      if (isset($_POST['submit'])) 
      {
        $email = $_POST['email'];
        $myPass = $_POST['myPass'];
         
        if (empty($_POST['email']) || empty($_POST['myPass'])) 
        {
          $error = "Email or Password is invalid";
        }
        else 
        {
          // Connect to database
          //$mysqli = new mysqli("localhost", "username", "password", "database_name");
          //$conn = new mysqli($servername, $username, $password, $dbname);
          
          include 'db.php';

          // Check for any connection errors
          if ($conn->connect_error) 
          {
            die("Connection failed: " . $conn->connect_error);
          }

          // username & password checking
          $sql = "SELECT * FROM customer WHERE email = '$email' AND myPass = '$myPass'";
          $result = $conn->query($sql);

          // If the query returned a row, username & password are valid
          if ($result->num_rows > 0) 
          {
            // Redirect to index.php
            //header("Location: reservation.php");
            echo"welcome";
            exit();
          } else {
            echo "username or password are valid";
          }
      }
    }
    ?>
    <h2>Login Form</h2>
    <form method="post" style="margin: 2rem 0 0 2rem;">
        <label>Email:</label>
            <input type="text" name="email" required><br><br>
        <label>Password:</label>
            <input type="password" name="myPass" required><br><br>
      
      <input type="submit" name="submit" value="Login"><br><br>

        <label>Remember me  </label>
            <input type="checkbox" checked="checked" name="remember"><br><br>

        <div class="container" style="background-color:#white">
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>

      <span><?php echo $error; ?></span>

    </form>
  </body>
</html>

<?php include "footer.php" ?>