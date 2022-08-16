<?php
$name=$_POST["name"];
$userName=$_POST["userName"];
$role=$_POST["role"];
$password=$_POST["password"];

echo $epf;
include "config.php";
$sql = "INSERT INTO `employee`(`id`, `name`, `userName`, `password`, `role`) VALUES
                    ('', '$name', '$userName', '$password', '$role') ";
echo  $sql;
if ($conn->query($sql) === TRUE) {
    $uniId = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $uniId;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();

header("Location: ../employee.php"); /* Redirect browser */
exit();
?>