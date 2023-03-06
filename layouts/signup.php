<?php
$title = "customer";
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
        $servername = "db";
        $username = "team8";
        $password = "team8pass";
        $dbname = "team8";
        //include('db.php');
        if ($myPass == $confirm_password)
        {
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address, myPass)
            values('$fName','$lName','$phoneNum','$nationalCode','$email','$address', '$myPass')"; 
            if($conn->query($sql)===TRUE){                
                //echo" <h5> Your information is added successfully <h5>";
                header("Location: index.php");
                exit;
            }
            else{
                echo"Error:" .$conn->Error;
            }
        }else
            {
            echo"Password and Confirm Password do not match";
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
<form method="post" style="margin: 5rem 0 0 2rem;">
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
</html>
<?php include 'footer.php' ?>