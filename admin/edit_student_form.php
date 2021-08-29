            

               
              <?php
              $query = mysqli_query($link,"select * from student LEFT JOIN class ON class.class_id = student.class_id where id = '$get_id'")or die(mysqli_error());
              $row = mysqli_fetch_array($query);
              ?>

<form method="POST">
      <div class="modal-body">
        
        <div class="container">
    <div class="row align-items-start">

        <div class="col">
        <div class="form-group">
          <div class="col-md-6">
         
          <select id="inputState" class="form-select form-select-sm" name="class" >
            <option selected value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
                      <?php
                      $cys_query = mysqli_query($link,"select * from class order by class_name");
                      while($cys_row = mysqli_fetch_array($cys_query)){
                      
                      ?>
            <option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
            <?php } ?>
          </select>
       </div>
        </div>
        <div class="form-group">
       
          <input type="text" name="studentid" class="form-control form-control-sm" placeholder="Student ID"  value="<?php echo $row['student_id'];?>">
        </div>
         <div class="form-group">
       
          <input type="text" name="password" class="form-control form-control-sm" placeholder="Password"  value="<?php echo $row['password'];?>">
        </div>
          <div class="form-group">
        
          <input type="text" name="firstname" class="form-control form-control-sm" placeholder="Enter Firstname"  value="<?php echo $row['firstname'];?>">
        </div>
        <div class="form-group">
        
          <input type="text" name="lastname" class="form-control form-control-sm" placeholder="Enter Lastname"  value="<?php echo $row['lastname'];?>">
        </div>
        <div class="form-group">
      
          <input type="text" name="middlename" class="form-control form-control-sm" placeholder="Enter Middlename"  value="<?php echo $row['middlename'];?>">
        </div>
        <div class="form-group">
       
          <input type="text" name="address" class="form-control form-control-sm" placeholder="Enter Address"  value="<?php echo $row['address'];?>">
        </div>


        </div>
      </div>
    </div>

      </div>
   

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="update"class="btn btn-primary">Update</button>
      </div>
      </form>


        <?php
if (isset($_POST['update'])){

  $stud_id=$_POST['studentid'];
  $password=$_POST['password'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $middlename=$_POST['middlename'];
  $address=$_POST['address'];
  $class=$_POST['class'];

mysqli_query($link,"UPDATE student SET student_id='$stud_id', password='$password', firstname='$firstname', lastname='$lastname', middlename='$middlename', address='$address', class_id='$class' where id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "student_register.php";
</script>
<?php

}
?>