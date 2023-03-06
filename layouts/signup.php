<?php
$title = "customer";
include "header.php";?>
<form method="POST" style="margin: 5rem 0 0 2rem;">
    <h4>Sign Up Form</h4>
    <div class="row">
        <div class="col">
            First Name:     <br><input type ="text" name ="fName" placeholder="" required size="30"> <br><br>
            Last Name:      <br><input type ="text" name ="lName" placeholder="" required size="30"><br><br>
        </div>
        <div class="col">
            Phone Number:   <br><input type ="text" name ="phoneNum" placeholder="" required size="30"><br><br>
            National Code:  <br><input type ="text" name ="nationalCode" placeholder="" size="30"><br><br>
        </div>
        <div class="col">
            Address:        <br><select name="address" style="width: 250px;">
                                <option value="Helsinki"> Helsinki </option>
                                <option value="Hämeenlinna"> Hämeenlinna </option>
                                <option value="Tampre"> Tampre </option>
                            </select><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Email:              <br><input type ="text" name ="email" placeholder="" required size="30"><br><br>
            Password:           <br><input type ="password" name="myPass" required><br><br>
            Confirm password:   <br><input type ="password" name="confirm_password" required><br><br>
        </div>
    </div>
    
    <input type ="submit" value ="submit" name="submit" ><br><br>

</form>
<?php
    if(isset($_POST['submit']))
    {
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $phoneNum=$_POST['phoneNum'];
        $nationalCode=$_POST['nationalCode'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $myPass=$_POST['myPass'];
        $confirm_password=$_POST['confirm_password'];
        if ($myPass != $confirm_password) 
            {
            echo" <h5> Password and Confirm Password do not match <h5>";
            }
        else
            {
                include 'db.php';
                $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address, myPass)
                values('$fName','$lName','$phoneNum','$nationalCode','$email','$address', '$myPass')";
                if($conn->query($sql)===TRUE)
                    {
                     //header("location: ../layout/index.php");
                     echo" <h5> Your information is added successfully <h5>";
                    }
                else
                    {
                    echo"Error:";
                    }
            }
    }
?>
<?php include "footer.php" ?>