<?php include "commenLayout/header.php"; ?>
<header class="w3-container" style="padding-top:22px">
    <h5><b>Order</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
          
      
       
        
          <br>
        <table id='myTable' class="w3-table-all">
        
        <?php
        // include "php/getWaitingUserList.php"
        include "API/getOrders.php"
        ?> 
        <!-- </table>  -->

        </table>


  </div>
<?php include "commenLayout/footer.php"; ?>