
<?php 
session_start();
$empId=$_SESSION["empId"] ;
$fname=$_SESSION["name"] ;
$role=$_SESSION["role"] ;

?>

<!DOCTYPE html>
<html>
<title>Grievance Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Food.lk</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue-grey w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./img/user.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $fname; ?></strong></span><br>
      
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>

  <?php
  
  if ($role=="ADMIN")
            echo "
            <div class='w3-bar-block'>
                        <a href='#' class='w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black' onclick='w3_close()' title='close menu'><i class='fa fa-remove fa-fw'></i>  Close Menu</a>
                        <a href='home.php' class='w3-bar-item w3-button w3-padding w3-blue'><i class='fa fa-users fa-fw'></i>  Overview</a>
                        <a href='employee.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-eye fa-fw'></i>  Employee</a>
                        <a href='item.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-users fa-fw'></i>  Item</a>
                        <a href='newOrders.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i> New Orders</a>
                        <a href='reportPanel.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Order History</a>
                        <a href='API/logout.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Log Out</a>

                        </div>
            
                ";
 if ($role=="EMPLOYEE")
                echo "
                <div class='w3-bar-block'>
                            <a href='#' class='w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black' onclick='w3_close()' title='close menu'><i class='fa fa-remove fa-fw'></i>  Close Menu</a>
                            <a href='home.php' class='w3-bar-item w3-button w3-padding w3-blue'><i class='fa fa-users fa-fw'></i>  Overview</a>
                           
                            <a href='grevence.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  My Grievance</a>
                            <a href='API/logout.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Log Out</a>
                            </div>
                
           
                    ";

if ($role=="MANAGER")
                    echo "
                    <div class='w3-bar-block'>
                                <a href='#' class='w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black' onclick='w3_close()' title='close menu'><i class='fa fa-remove fa-fw'></i>  Close Menu</a>
                                <a href='home.php' class='w3-bar-item w3-button w3-padding w3-blue'><i class='fa fa-users fa-fw'></i>  Overview</a>
                                <a href='employee.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-eye fa-fw'></i>  Employee</a>
                                <a href='pendingGrevence.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Pending Grievance</a>
                                <a href='grevence.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  My Grievance</a>
                                <a href='API/logout.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Log Out</a>
                                </div>
                    
                 
                        ";
if ($role=="SO")
                        echo "
                        <div class='w3-bar-block'>
                                    <a href='#' class='w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black' onclick='w3_close()' title='close menu'><i class='fa fa-remove fa-fw'></i>  Close Menu</a>
                                    <a href='home.php' class='w3-bar-item w3-button w3-padding w3-blue'><i class='fa fa-users fa-fw'></i>  Overview</a>
                                    
                                    <a href='pendingGrevence.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Pending Grievance</a>
                                    <a href='grevence.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  My Grievance</a>
                                    <a href='API/logout.php' class='w3-bar-item w3-button w3-padding'><i class='fa fa-bullseye fa-fw'></i>  Log Out</a>
                                    </div>
                        
                      
                            ";
  
  
  ?>
  
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-pale-sand" style="margin-left:300px;margin-top:43px;">
