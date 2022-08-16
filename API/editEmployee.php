<?php
$id=$_POST["id"];
$name=$_POST["name"];
$epf=$_POST["epf"];
$etf=$_POST["etf"];
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$department=$_POST["department"];
$role=$_POST["role"];
$nic=$_POST["nic"];

echo $role;

include "config.php";
$sql = "UPDATE `employee` SET 

`epfNo` = '$epf',
`name` = '$name',
`etfNo` = '$etf',
`email` = '$email',
`password` = '$pass',
`department` = '$department',
`role` = '$role',
`nic` = '$nic'

WHERE `employee`.`id` = '$id';
";
echo $sql;
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