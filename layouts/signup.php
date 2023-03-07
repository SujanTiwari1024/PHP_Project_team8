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

<form method="POST" class="signup_form">
    <?php echo "<h3 class='error'>".$error."</h3>";?>
    
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

<?php include 'footer.php'?>