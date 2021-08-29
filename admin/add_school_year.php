
<div class="container-fluid">
<div class="card text-center " style="width: 20rem; height: 15rem; box-shadow: 10px;">
  <div class="text-left">
  <div class="card-header"><i class="fas fa-plus-circle"></i> Add School Year</div>
  </div>
  <div class="card-body">
   <form method="POST" style="margin-top: 1rem;">
    <div class="form-group">
      <div class="mb-3">
         <input type="text" class="form-control" name="addyear" placeholder="Add Year">
      </div>
    </div>
  <br>
    <div class="text-left">
       <button name="save" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i></button>
    </div>
 
</form>
  </div>
  
</div>
</div>


<?php
if (isset($_POST['save'])){
$class_year = $_POST['addyear'];


$query = mysqli_query($link,"select * from school_year where school_year  =  '$class_year' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Date Already Exist');
</script>
<?php
}else{
mysqli_query($link,"insert into school_year (school_year) values('$class_year')")or die(mysqli_error());
?>
<script>
window.location = "school_year.php";
</script>
<?php
}
}
?>


