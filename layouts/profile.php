<?php include 'header.php';
include 'db.php'; ?>


<?php
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $customerId = '';
        $firstName = '';
        $lastName = '';
        $phoneNum = '';
        $nationalCode = '';
        $address = '';
        $role = '';
        $query="SELECT * FROM customer WHERE email='$email'";
        $result = $conn->query($query);
  
        if ($result->num_rows > 0) {
            // fetching data
            while($row = $result->fetch_array())
            {
                $customerId = $row["customerId"];
                $firstName = $row["fName"];
                $lastName = $row["lName"];
                $phoneNum = $row["phoneNum"];
                $nationalCode = $row["nationalCode"];
                $address = $row["address"];
                $role = $row["role"];
            }
        } 
    }
?>

<article class="profile_info">
    <h4 class="heading">My profile Details</h4>
    <?php echo "<p>Customer ID:".$customerId."</p>";?>
    <?php echo "<p>Name : ".$lastName." ".$firstName."</p>";?>
    <?php echo "<p>Email : ".$email."</p>";?>
    <?php echo "<p>".$phoneNum."</p>";?>
    <?php echo "<p>".$nationalCode."</p>";?>
    <?php echo "<p>".$address."</p>";?>
    <?php echo "<p>".$role."</p>";?>
</article>

<?php include 'footer.php'; ?>