<?php include "commenLayout/header.php"; ?>
<header class="w3-container" style="padding-top:22px">
    <h5><b>Item</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
          
      
       
          
          <a href="newItem.php"><button class="w3-btn w3-green">+</button></a>
          <br>
        
          <br>
        <table id='myTable' class="w3-table-all">
        <thead>
        <tr class="w3-red">

        <th> Id</th>
        <th> Image</th>
        <th> Name</th>
        <th> Price</th>
        <th>Description</th>
        <th>Status</th>
        <th></th>



        </tr>
        </thead> 
        <?php
        // include "php/getWaitingUserList.php"
        include "API/item.php"
        ?> 
        <!-- </table>  -->

        </table>


  </div>
<?php include "commenLayout/footer.php"; ?>