<?php
$id=$_REQUEST["id"];
include "config.php";
$sql = "UPDATE `employee` SET `status` = 'INACTIVE' WHERE `employee`.`id` = '$id';";

if ($conn->query($sql) === TRUE) {
    echo "Account updated successfully";
} else {
    echo "Error updating Account: " . $conn->error;
}


$conn->close();
header("Location:../employee.php"); 
exit;
?>