   <div class="container-fluid">
                <div class="card text-center " style="width: 20rem; height: 15rem; box-shadow: 10px;">
                  <div class="text-left">
                  <div class="card-header"><i class="fas fa-pen"></i> Edit School Year</div>
                  </div>
                  <div class="card-body">

                         
               <?php 
              $query = mysqli_query($link,"select * from school_year where school_year_id = '$get_id'")or die(mysqli_error());
              $row = mysqli_fetch_array($query);
              ?>
                                <form method="POST">
                                <div class="form-group">
                                  <div class="mb-3">
                                     <input type="text" class="form-control" name="school_year" placeholder="Edit" value="<?php echo $row['school_year'];?>">
                                  </div>
                                </div>
                              <br>
                                <div class="text-left">
                                   <button name="update" type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                </div>
                                </form>
                                
                    
                  </div>
                  
          </div>
       </div>


    <?php
if (isset($_POST['update'])){
$school_year = $_POST['school_year'];

mysqli_query($link,"update school_year set school_year = '$school_year' where school_year_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "school_year.php";
</script>
<?php

}
?>