<?php include "commenLayout/header.php"; ?>
<header class="w3-container" style="padding-top:22px">
    <h5><b>Employee</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
          
      <div class="w3-container w3-teal">
      <h2> New Employee </h2>
    </div>

        <form class="w3-container" action="API/addEmployee.php" method="POST">
          <!-- <label class="w3-text-teal"><b>Area</b></label>
          -->

          
          <label class="w3-text-black"><b>Name </b></label>
          <input class="w3-input w3-border" type="text" name="name" value="">
          <label class="w3-text-black"><b>UserName </b></label>
          <input class="w3-input w3-border" type="text" name="userName" value="">
       
          <label class="w3-text-black"><b>Password </b></label>
          <input class="w3-input w3-border" type="text" name="password" value="">

          <label class="w3-text-black"><b>Role </b></label>
          <select class="w3-select" name="role">
            <option value="" disabled selected>Choose your option</option>
            <option value="KITCHEN">Kitchen</option>
            <option value="EMPLOYEE" >Employee</option>
              
          </select>
          
          <button class="w3-btn w3-blue-grey">Add</button>
        </form>

        


  </div>
<?php include "commenLayout/footer.php"; ?>