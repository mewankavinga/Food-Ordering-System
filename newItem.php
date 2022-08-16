<?php include "commenLayout/header.php"; ?>
<header class="w3-container" style="padding-top:22px">
    <h5><b>Item</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
          
      <div class="w3-container w3-teal">
      <h2> New Item </h2>
    </div>

        <form class="w3-container" action="API/addItem.php" method="POST" enctype="multipart/form-data">
          <!-- <label class="w3-text-teal"><b>Area</b></label>
          -->

          
          <label class="w3-text-black"><b>Name </b></label>
          <input class="w3-input w3-border" type="text" name="name" value="">
          <label class="w3-text-black"><b>Price </b></label>
          <input class="w3-input w3-border" type="text" name="price" value="">
       
          <label class="w3-text-black"><b>Description </b></label>
          <input class="w3-input w3-border" type="text" name="description" value="">
          
          <label class="w3-text-black"><b>Image </b></label>
          <input class="w3-input w3-border" type="file" name="img" value="">

          
          <button class="w3-btn w3-blue-grey">Add</button>
        </form>

        


  </div>
<?php include "commenLayout/footer.php"; ?>