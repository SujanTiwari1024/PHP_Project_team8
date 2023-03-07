<?php
$title = "Customer List";

include'header.php';
include 'db.php';?>

</html>
<form method="post" style="margin: 12rem auto; width: 70%;">
    <h4>List of customer</h4>


<?php
$sql ="select * from customer";
$result = $conn->query($sql);

if($result->num_rows > 0){

    echo" <table class = 'table' style ='margin:auto; margin-top:150px; width:90%;'>
    <tr><th></th> <tr>
    
        <tr>
        <th>    Id              </th> 
        <th>    First Name      </th> 
        <th>    Last Name       </th>
        <th>    Phone Number    </th> 
        <th>    National Code   </th>
        <th>    Email           </th>  
        <th>    Address         </th>
        </tr>
        <tr></tr>
        <tr></tr>";
        
    while($row = $result -> fetch_assoc()) {
        echo "
        <tr>
        <td><a href='edit.php?customerId=$row[customerId]'>$row[customerId] </a></td>
        
        <td> $row[fName]            </td>
        <td> $row[lName]            </td>
        <td> $row[phoneNum]          </td>
        <td> $row[nationalCode]     </td>
        <td> $row[email]            </td>
        <td> $row[address]          </td>
        </tr>
        ";
    }
    
    echo "</table>";
}
else
{
    echo "No result";
}

$conn-> close();

?>
    </form>
</html>

<?php include 'footer.php' ?>

