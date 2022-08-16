
<?php

include_once "config.php";
 $sql = "SELECT * FROM `item` ";
;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
        $price= $row["price"];
        $description= $row["description"];
        $status= $row["status"];

        echo "<tr>

        <td> $id</td>
        <td><img src='../img/$id.jpg' alt='' style='width:90px ;display: block;margin-left: 0; margin-right: auto;'></td>
        <td>$name</td>
        <td>$price</td>
       
        <td>$description</td>
        <td>$status</td>
        <td> <a href='editItem.php?id=$id'>  <button class='w3-btn w3-blue'>Edit</button></a>
        <a href='API/removeEmployee.php?id=$id'>  <button class='w3-btn w3-red'>X</button></td></a>
        </tr>";
         }


    


    
} else {

  
}
$conn->close();



?>