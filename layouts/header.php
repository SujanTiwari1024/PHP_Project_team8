<?php 
include 'db.php';
 
// Starting the session, to use
session_start();
  
// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>

<?php
    $role = '';
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $firstName = '';
        $query="SELECT * FROM customer WHERE email='$email'";
        $result = $conn->query($query);
  
        if ($result->num_rows > 0) {
            // fetching data
            while($row = $result->fetch_array())
            {
                $firstName = $row["fName"];
                $role = $row["role"];
            }
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Restaurant</title>
    <link rel="stylesheet" href="../assets/images/css/style.css">
    <link rel="stylesheet" href="../assets/images/css/order.css">

</head>

<body>

    <div class="header">
            <a class="logo-con" href="index.php">
                <img src="../assets/images/cool-logo01.png" alt="cool-logo01" class="logo">
                <img src="../assets/images/cool-font03.png" alt="cool-font03" class="logo-3">
            </a>

            <div class="header-links">
                <div class="header-menu">
                    <a href="menu.php">Menu</a>
                    <a href="reservation.php">Reservations</a>
                    <a href="aboutus.php">About Us</a>
                    <?php if ('admin' === $role) : ?>
                        <a href="customerList.php">Customer List</a>
                     <?php endif ?>
                    <!-- show login/signup if user not logged in -->
                    <?php if (!isset($_SESSION['email'])) : ?>
                        <a id="login" href='login.php'>Log in</a>
                        <a id="signup" href='signup.php'>Sign up</a>
                     <?php endif ?>

                     <!-- show profile/logout if user is logged in -->
                    <?php if (isset($_SESSION['email'])) : ?>
                        <a id ="profile" href='profile.php'>Hi, <?php echo $firstName; ?></a>
                        <a href="header.php?logout='1'" 
                            style="color: red;">
                                 Logout
                        </a>
                     <?php endif ?>
                </div>

                <!-- This is a hamburger menu -->
                <div class="ham_menu">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
    </div>