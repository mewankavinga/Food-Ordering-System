<?php
session_start();
$userName=$_REQUEST['email'];
$pass=$_REQUEST['password'];
if ($userName=="admin@food.lk"&& $pass=="nimda"){
    $_SESSION["empId"] = 0;
    $_SESSION["name"] = 'ADMIN';
    $_SESSION["role"] ='ADMIN';
    header("Location:../home.php"); 
exit;
}

else{
include "config.php";
$sql = "SELECT * FROM `employee` WHERE `userName` = '$userName' AND `password` = '$pass'  ;";
$result = $conn->query($sql);

echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $fName=$row["name"];
        $role=$row["role"];

        $_SESSION["empId"] = $id;
        $_SESSION["name"] = $fName;
        $_SESSION["role"] = $role;
        header("Location:../home.php"); 
        exit;
    }
} else {
    header("Location:../index.php"); 
    exit;
}
$conn->close();


}
?>