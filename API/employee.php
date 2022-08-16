
<?php

include_once "config.php";
 $sql = "SELECT * FROM `employee` ";
;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
        $userName= $row["userName"];
        $role= $row["role"];
       

        echo "<tr>

        <td> $id</td>
       
        <td>$name</td>
        <td>$userName</td>
       
        <td>$role</td>
        
        <td> <a href='editEmployee.php?id=$id'>  <button class='w3-btn w3-blue'>Edit</button></a>
        <a href='API/removeEmployee.php?id=$id'>  <button class='w3-btn w3-red'>X</button></td></a>
        </tr>";
         }


    


    
} else {

  
}
$conn->close();



?>