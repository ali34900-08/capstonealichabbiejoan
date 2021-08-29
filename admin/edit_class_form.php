           <div class="container-fluid">
                <div class="card text-center " style="width: 20rem; height: 15rem; box-shadow: 10px;">
                  <div class="text-left">
                  <div class="card-header"><i class="fas fa-pen"></i> Edit Class</div>
                  </div>
                  <div class="card-body">

               <?php 
              $query = mysqli_query($link,"select * from class where class_id = '$get_id'")or die(mysqli_error());
              $row = mysqli_fetch_array($query);
              ?>
                                <form method="POST">
                                <div class="form-group">
                                  <div class="mb-3">
                                     <input type="text" class="form-control" name="class_name" placeholder="Edit" value="<?php echo $row['class_name'];?>">
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
    </div>

    <?php
if (isset($_POST['update'])){
$class_name = $_POST['class_name'];

mysqli_query($link,"update class set class_name = '$class_name' where class_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "class.php";
</script>
<?php

}
?>