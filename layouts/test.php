<?php
$title = "Customer List";

include'../layouts/header.php';
include 'db.php';


$sql ="select * from customer";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){

    echo" <table class = 'table'>
    <tr><th></th> <tr>
    
        <tr>
        <th>    Id              </th> 
        </tr>";
        
    while($row = $result -> fetch_assoc()) {
        echo "
        <tr>
        <td><a href='edit.php?customerId=$row[customerId]'>$row[customerId] </a>     </td>
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


<?php include '../layouts/footer.php' ?>

