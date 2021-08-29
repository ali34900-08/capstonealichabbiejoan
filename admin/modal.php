<!-- Modal -->
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Student</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
      	
      	<div class="container">
 		<div class="row align-items-start">

      	<div class="col">
      	<div class="form-group">
        	<div class="col-md-4">
			    <select id="inputState" class="form-select form-select-sm" name="class">
			      <option selected>Class...</option>
			      <?php
						$query = mysqli_query($link,"select * from class order by class_name ")or die(mysqli_error());
						while($row = mysqli_fetch_array($query)){
						?>
						<option value="<?php echo $row['class_id'] ?>"><?php echo $row['class_name']; ?></option>
						<?php
						}
						?>
			    </select>
			 </div>
        </div>
        <div class="form-group">
			    <input type="text" name="studentid" class="form-control form-control-sm" placeholder="Student ID">
        </div>
         <div class="form-group">
			    <input type="text" name="password" class="form-control form-control-sm" placeholder="Password">
        </div>
         <div class="form-group">
			    <input type="text" name="cpassword" class="form-control form-control-sm" placeholder="Confirm Password">
        </div>
        <div class="form-group">
        	<input type="text" name="firstname" class="form-control form-control-sm" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
        	<input type="text" name="lastname" class="form-control form-control-sm" placeholder="Enter Lastname">
        </div>
        <div class="form-group">
        	<input type="text" name="middlename" class="form-control form-control-sm" placeholder="Enter Middlename">
        </div>
        <div class="form-group">
        	<input type="text" name="address" class="form-control form-control-sm" placeholder="Enter Address">
        </div>


        </div>
    	</div>
		</div>

      </div>
   

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="register_button"class="btn btn-primary">Register</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal teacher-->
<div class="modal fade" id="Register_teacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Teacher</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        
        <div class="container">
    <div class="row align-items-start">

        <div class="col">
      
        <div class="form-group">
      
          <input type="text" name="username" class="form-control form-control-sm" placeholder="username">
        </div>
         <div class="form-group">
        
          <input type="text" name="password" class="form-control form-control-sm" placeholder="Password">
        </div>
         <div class="form-group">
       
          <input type="text" name="cpassword" class="form-control form-control-sm" placeholder="Confirm Password">
        </div>
        <div class="form-group">
       
          <input type="text" name="firstname" class="form-control form-control-sm" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
        
          <input type="text" name="lastname" class="form-control form-control-sm" placeholder="Enter Lastname">
        </div>
        <div class="form-group">
         
          <input type="text" name="address" class="form-control form-control-sm" placeholder="Enter Address">
        </div>


        </div>
      </div>
    </div>

      </div>
   

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
      </div>
      </form>

    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Admin</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        
        <div class="container">
    <div class="row align-items-start">

        <div class="col">
      
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control form-control-sm" placeholder="username">
        </div>
         <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control form-control-sm" placeholder="Password">
        </div>
         <div class="form-group">
          <label>Confirm Password</label>
          <input type="text" name="cpassword" class="form-control form-control-sm" placeholder="Confirm Password">
        </div>
        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="firstname" class="form-control form-control-sm" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="lastname" class="form-control form-control-sm" placeholder="Enter Lastname">
        </div>
       


        </div>
      </div>
    </div>

      </div>
   

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Register</button>
      </div>
      </form>

    </div>
  </div>
</div>


