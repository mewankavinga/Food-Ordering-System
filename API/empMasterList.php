
<?php

include_once "config.php";
$sql = "SELECT * FROM `employee` WHERE `role`='MANAGER'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
       
        echo "<option value='$id' >$name</option>";

        
         }


    


    
} else {

  
}



?>