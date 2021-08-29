            

               
              <?php
              $query = mysqli_query($link,"select * from teacher where id = '$get_id'")or die(mysqli_error());
              $row = mysqli_fetch_array($query);
              ?>

<form method="POST">
      <div class="modal-body">
        
        <div class="container">
    <div class="row align-items-start">

        <div class="col">
       
        <div class="form-group">
       
          <input type="text" name="username" class="form-control form-control-sm" placeholder="Student ID"  value="<?php echo $row['username'];?>">
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

  $username=$_POST['username'];
  $password=$_POST['password'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $address=$_POST['address'];


mysqli_query($link,"UPDATE teacher SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', address='$address' where id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "teacher_register.php";
</script>
<?php

}
?>