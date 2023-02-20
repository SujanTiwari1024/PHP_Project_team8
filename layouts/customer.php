<?php
$title = "customer";
include "header.php";?>

<form action="" method="post">

    <input type ="text" name ="fName" placeholder="First Name" required> <br><br>
    <input type ="text" name ="lName" placeholder="Last Name" required><br><br>
    <input type ="text" name ="phoneNum" placeholder="Phone Number" required><br><br>
    <input type ="text" name ="nationalCode" placeholder="nationalCode"><br><br>
    <input type ="text" name ="email" placeholder="email"><br><br>
    
    <select name="address">
        <option value="Helsinki"> Helsinki </option>
        <option value="Hämeenlinna"> Hämeenlinna </option>
        <option value="Tampre"> Tampre </option>
    </select><br><br>

    <input type ="submit" value ="Submit" name="submit" >

</form>

<?php
        if(isset($_POST['submit'])){
            $fName=$_POST['fName'];
            $lName=$_POST['lName'];
            $phoneNum=$_POST['phoneNum'];
            $nationalCode=$_POST['nationalCode'];
            $email=$_POST['email'];
            $address=$_POST['address'];

            include 'db.php';
            $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address)
            values('$fName','$lName','$phoneNum','$nationalCode','$email','$address')";
            
            if($conn->query($sql)===TRUE){
                
                echo" <h5> Your information is added successfully <h5>";

            }
            else{

                echo"Error:" .$conn->Error;

            }
        }
?>

<style> 
body {
    background-image: url(../assets/images/background2.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    color: aliceblue;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(206, 48, 48);
}
</style>

<?php ?>

<?php include "footer.php" ?>