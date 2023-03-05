<?php
$title = "Customer List";
include "header.php";
include 'db.php';


$sql ="select * from customer";
$result = $conn->query($sql);

if($result->num_rows > 0){

    echo" <table class = 'table'>
    <tr><th></th> <tr>
    
        <tr>
        <th>    Id              </th> 
        <th>    First Name      </th> 
        <th>    Last Name       </th>
        <th>    Phone Number    </th> 
        <th>    National Code   </th>
        <th>    Email           </th>  
        <th>    Address         </th>
        </tr>";
        
    while($row = $result -> fetch_assoc()) {
        echo "
        <tr>
        <td><a href='edit.php?customerId=$row[customerId]'>$row[customerId] </a>     </td>
        
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


<?php ?>

<?php include "footer.php" ?>