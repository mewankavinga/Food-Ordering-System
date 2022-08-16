
<?php

$id=$_REQUEST["id"];
include_once "config.php";
$sql = "SELECT * FROM `employee`WHERE `employee`.`id`='$id'";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
        $userName= $row["userName"];
        $role= $row["role"];
        
    }
    
} else {

  
}
// $conn->close();



?>