
<?php
$startDate=$_REQUEST["startDate"];
$endDate=$_REQUEST["endDate"];
$department=$_REQUEST["department"];
$type=$_REQUEST["type"];

$dateQry="";
$depQry="";
$typeQry="";
if ($startDate!="") $dateQry="AND `grievance`.`timeStamp` BETWEEN '$startDate' AND '$endDate'";
if ($department!="") $depQry="AND `grievance`.`department` ='$department'";
if ($type!="") $typeQry="AND `grievance`.`type` ='$type'";

include_once "config.php";

$sql = "SELECT `grievance`.`id`,`grievance`.`currentState`,`grievance`.`confirm`,`grievance`.`title`,`grievance`.`description`,`grievance`.`type`,`grievance`.`timeStamp`,`grievance`.`currentState`,`employee`.`name`AS `employeeName`,`employee`.`epfNo`,`department`.`name`AS `department` FROM `grievance`,`employee`,`department` WHERE `grievance`.`employee`=`employee`.`id` AND `employee`.`department` =`department`.`id`$dateQry $typeQry $depQry";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $title= $row["title"];
        $description= $row["description"];
        $type= $row["type"];
        $timeStamp= $row["timeStamp"];
        $currentState= $row["currentState"];
        $employeeName= $row["employeeName"];
        $employeeEpfNo= $row["epfNo"];
        $department= $row["department"];
        $currentState= $row["currentState"];
        $confirm= $row["confirm"];
        // $department= $row["department"];
        echo "<tr>

        <td> $id</td>
        <td>$employeeName(employeeEpfNo)</td>
        <td>$title</td>
        <td>$description</td>
        <td>$department</td>
        <td>$type</td>
        <td>$timeStamp</td>
        <td>$currentState</td>
        <td>$confirm</td>
        <td> </a>
        
        </tr>";
         }


    


    
} else {

  
}
$conn->close();



?>