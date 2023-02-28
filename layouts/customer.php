<?php
$title = "customer";
include "header.php";?>

<form action="" method="post" style="margin: 10rem 0 0 2rem;">

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


<?php ?>

<?php include "footer.php" ?>