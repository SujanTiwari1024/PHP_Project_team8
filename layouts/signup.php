<?php include 'header.php';?>

<?php
    $error = '';
    if(isset($_POST['submit'])) {
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $phoneNum=$_POST['phoneNum'];
        $nationalCode=$_POST['nationalCode'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $myPass=$_POST['myPass'];
        $confirm_password=$_POST['confirm_password'];
        if ($myPass != $confirm_password) {
            $error = "Password and Confirm Password do not match";
        }
        else {
            include 'db.php';
            $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address, myPass)
            values('$fName','$lName','$phoneNum','$nationalCode','$email','$address', '$myPass')";
            if($conn->query($sql) === TRUE) {
                $_SESSION['email'] = $email;
                echo "<script>window.location.href='profile.php'</script>";
            }
            else {
                $error = "Error occured while registering user";
            }
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Restaurant</title>
    <!--<link rel="stylesheet" href="style.css"> -->

</head>

<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<form method="post" action="" onsubmit="return crud()" name="Form1" style="margin: 12rem auto; width: 50%;">
    <h4>Sign Up Form</h4>
        <div class="col">
            <label>First Name:</label>
            <input type ="text" name ="fName" placeholder="Enter your name here" required size="30">
        </div>
        <div class="col">
            <label>Last Name:</label>
            <input type ="text" name ="lName" placeholder="Enter your surname here" required size="30">
        </div>
        <div class="col">
            <label>Phone Number:</label>
            <input type ="text" name ="phoneNum" placeholder="Enter your phone number here" required size="30">
        </div>
        <div class="col">
            <label>National Code:</label>
            <input type ="text" name ="nationalCode" placeholder="Enter national Code here" required size="30">
        </div>
        <div class="col">
            <label>Address:</label>
            <select name="address" style="width: 250px;">
                <option value="Helsinki"> Helsinki </option>
                <option value="Hämeenlinna"> Hämeenlinna </option>
                <option value="Tampre"> Tampre </option>
            </select>
        </div>
        <div class="col">
            <label>Email:</label>
            <input type ="text" name ="email" placeholder="abc@gmail.com" required size="30">
        </div>
        <div class="col">
            <label>Password:</label>
            <input type ="password" name="myPass" required>
        </div>
        <div class="col">
            <label>Confirm password:</label>
            <input type ="password" name="confirm_password" required>
        </div>
    <input class="button" type ="submit" value ="submit" name="submit" >
</form>
</html>

<script>
 // Check if fName is valid
 function crud(){
    let fName=(document.Form1.fName.value).trim();
    if(fName.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
        }
    }

    // Check if lName is valid
    function crud(){
        let lName=(document.Form1.lName.value).trim();
        if(lName.length<5){
            alert("Last Name must have atleast 5 characters");
            return false;
        }
    }

    // Check if phone number numbers
    function crud(){
    let phoneNum=(document.Form1.phoneNum.value).trim();
    if (isNaN(phoneNum)) {
        alert("Phone number must be numbers.");
        return false;
        }
    }

    // Check if email is valid
    function validateEmail(email) {
        const emailRegex = /^\S+@\S+\.\S+$/;
        return emailRegex.test(email);
    }  

    function crud(){
    let email=(document.Form1.email.value).trim();
    if (!validateEmail(email)) {
        alert("Invalid email address");
        return false;
        }
    }

</script>

<?php include 'footer.php' ?>
