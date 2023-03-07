<?php
$title = "Edit customer information";

include '../layouts/header.php';

include 'db.php';
?>
<?php
$a = $_GET['customerId'];
$result = mysqli_query($conn, "select * from customer where customerId = '$a'");
$row = mysqli_fetch_array($result)

?>

<h3> Update or Delete </h3>

<form action="" method="post" style="margin: 5rem 0 0 2rem;">

    <label>First Name:</label><br>
    <input type ="text" name ="fName" placeholder="" required value = "<?php echo $row['fName'];?>"> <br><br>
    <label>Last Name:</label><br>
    <input type ="text" name ="lName" placeholder="Last Name" required value = "<?php echo $row['lName'];?>"><br><br>
    <label>Phone Number:</label><br>
    <input type ="text" name ="phoneNum" placeholder="Phone Number" required value = "<?php echo $row['phoneNum'];?>"><br><br>
    <label>National Code:</label><br>
    <input type ="text" name ="nationalCode" placeholder="National Code" value = "<?php echo $row['nationalCode'];?>"><br><br>
    <label>Email:</label><br>
    <input type ="text" name ="email" placeholder="Email" value = "<?php echo $row['email'];?>"><br><br>
    <label>Address:</label><br>
    <select name="address" value = "<?php echo $row['address'];?>">
        <option value="Helsinki"> Helsinki </option>
        <option value="Hämeenlinna"> Hämeenlinna </option>
        <option value="Tampre"> Tampre </option>
    </select><br><br>
    
    <div>
        <input type ="submit" value ="update your information" name="update" >
        <input type ="submit" value ="delete your information" name="delete" >
        <br><br>
    </div>

</form>

<?php

    if (isset($_POST['update']))
    {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $phoneNum = $_POST['phoneNum'];
        $nationalCode = $_POST['nationalCode'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = mysqli_query($conn, "UPDATE customer set 
        fName = '$fName', lName = '$lName', phoneNum = '$phoneNum', nationalCode = '$nationalCode', 
        email = '$email', address = '$address' where customerId = '$a'");

            if ($query){

                echo "<h3> Your Information updated Successfully </h3>";
            }
            else{
                echo "<h3> Not update </h3>";
            }
    }

    if (isset($_POST['delete']))
    {
        $query = mysqli_query($conn, "delete from customer where CustomerId = '$a'");

            if ($query)
            {
                echo "<h5> Your information deleted Successfully </h5>";
            }
            else
            {
                echo "<h5> Delete failed </h5>";
            }
    }

?>




<?php include '../layouts/footer.php' ?>

