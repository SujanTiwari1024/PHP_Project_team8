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
      if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $myPass = $_POST['myPass'];
         
        if (empty($_POST['email']) || empty($_POST['myPass'])) {
          $error = "Email or Password is required";
        }
        else {
          // username & password checking
          $sql = "SELECT * FROM customer WHERE email = '$email' AND myPass = '$myPass'";
          $result = $conn->query($sql);

          // If the query returned a row, username & password are valid
          if ($result->num_rows > 0) 
          {
            $_SESSION['email'] = $email;
            echo "<script>window.location.href='profile.php'</script>";
          } else {
            $error ="username or password are not valid";
          }
      }
    }
    ?>
    
    <form method="post" class="signin">
    <h2>Login Form</h2>
    <h4 class="error"><?php echo $error; ?></h4>
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

    </form>
  </body>
</html>

<?php include "footer.php" ?>