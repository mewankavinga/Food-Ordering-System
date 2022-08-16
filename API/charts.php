<?php
$today= date("Y-m-d") ;
$year=date("Y");
$month=date("m");
$d=strtotime("-1 Months");
$lastMonthYear=date("Y",$d);
$lastMonth=date("m",$d);
$lastYear=date("Y")-1;

$departmentList="";

$todayCaseList="";
$thisMonthCaseList="";
$lastMonthCaseList="";
$thisYearCaseList="";
$lastYearCaseList="";
$overAllCaseList="";



$colorArray="";
$colorArrayBorder="";
include_once "config.php";
$sql = "SELECT * FROM `department`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
        $departmentList=$departmentList."'$name',";
        $colorArray=$colorArray."'rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).", 0.2)',";
        $colorArrayBorder=$colorArrayBorder."'rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).", 1)',";
        
            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id AND date(`timestamp`)='$today'";
           
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $todayCaseList=$todayCaseList."$dataCount,";
                
                    }
                
            } else {}

            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id AND YEAR(`timestamp`)='$year'AND MONTH(`timestamp`)='$month'";
       
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $thisMonthCaseList=$thisMonthCaseList."$dataCount,";
                
                    }
                
            } else {}

            
            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id AND YEAR(`timestamp`)='$lastMonthYear'AND MONTH(`timestamp`)='$lastMonth'";
       
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $lastMonthCaseList=$lastMonthCaseList."$dataCount,";
                
                    }
                
            } else {}

            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id AND YEAR(`timestamp`)='$year'";
       
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $thisYearCaseList=$thisYearCaseList."$dataCount,";
                
                    }
                
            } else {}

            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id AND YEAR(`timestamp`)='$lastYear'";
       
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $lastYearCaseList=$lastYearCaseList."$dataCount,";
                
                    }
                
            } else {}

            $sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE `department`=$id ";
       
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
                    $dataCount= $row1["dataCount"];
                   
                    $overAllCaseList=$overAllCaseList."$dataCount,";
                
                    }
                
            } else {}

           

        
         }

} else {}


$sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE  `confirm`='SOLVED'";
       
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $confirmed= $row1["dataCount"];
       
     
    
        }
    
} else {}

$sql1 = "SELECT count(`id`) AS `dataCount`  FROM `grievance` WHERE  `confirm`='NOT_CONFIRMED_YET' ";

$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $notConfirmed= $row1["dataCount"];
       
     
    
        }
    
} else {}
//echo $colorArray;

?>