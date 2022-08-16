<?php

include_once "config.php";
$sql = "SELECT `order`.`id`,`order`.`date`,`order`.`user`,`order`.`total`,`order`.`paymentStatus`,`order`.`address`,`order`.`deliveryStatus`,`user`.`fName`,`user`.`lName`, `user`.`contactNo` FROM `order`,`user` WHERE `order`.`user`= `user`.`id` AND`date`=CURRENT_DATE ORDER BY `order`.`id` desc ";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "
    <thead>
    <tr class='w3-light-grey'>
    <th> </th>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact No</th>
            
       
            <th>Payment Status</th>
            <th>delivery Status</th>
            <th>Price</th>
            <th></th>
      
    </tr>
  </thead>";
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $user= $row["user"];
        $address= $row["address"];
        $contactNo= $row["contactNo"];
        $pamentStatus= $row["paymentStatus"];
        $deliveryStatus= $row["deliveryStatus"]; 
        $total= $row["total"];
        // $orderId= $row["orderId"];
        $name= $row["fName"] ." ".$row["lName"];
        $date= $row["date"];
        // date_default_timezone_set('Europe/London');
        $datetime = new DateTime($date);
        // echo $datetime->format('Y-m-d H:i:s') . "\n";
        $la_time = new DateTimeZone('Asia/Colombo');
        $datetime->setTimezone($la_time);
        $date=$datetime->format('Y-m-d H:i:s');

        if($deliveryStatus=="PENDING")
        echo "
       
      <tr class='w3-text-red'>
      <td>$id</td>
        
        <td>$user </td>
        <td>$name </td>
        <td>$address</td>
        <td>$contactNo </td>
        <td>$date</td>
        
        <td>$pamentStatus</td>
        <td>$deliveryStatus</td>
        <td>$total</td>
        <td><a href='../order/?id=$$id'>View</a></td>


        
      </tr>
     
        ";
        else 

        echo "
        <tr>
        <td>$id</td>
          
          <td>$user </td>
          <td>$name </td>
          <td>$address</td>
          <td>$contactNo </td>
          <td>$date</td>
          
          <td>$pamentStatus</td>
          <td>$deliveryStatus</td>
          <td>$total</td>
          <td><a href='../order/?id=$$id'>View</a></td>
  
  
          
        </tr>
       
          ";
    }
} else {
}
$conn->close();




?>