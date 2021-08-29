<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>
<?php $get_id = $_GET['id']; ?>
<div class="container">
  <div class="row">
     <div class="col-lg-4 mb-4">

                <div class="container">
                  <div class="row">
                   <form action="school_year.php">
                     <button name="datebtn" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add School Year</button>
                   </form>
                  </div>
                </div>

                <br>

             
                <div class="container">
                  <div class="row">
                  <?php include('edit_school_year_form.php'); ?>
                  </div>
                </div>
    </div>


    <div class="card shadow col-lg-6 mb-4 mx-auto">
        <div class="card-header py-3 " >
              <h6 class="m-0 font-weight-bold text-primary">School Year</h6>
        </div>
         <div class="card-body">
                       
              <div class="table-responsive">

                  <?php 

                 $query = "select * from school_year ";
                 $query_run = mysqli_query($link, $query);


                ?>


                <form action="delete_sy.php">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                  <a data-toggle="modal" href="#delete_sy"  id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php include('modal_delete.php'); ?>
                  <thead>
                    <tr>
                      <th></th>
                      <th>School Year</th>
                     <th></th>
                   
                    </tr>
                  </thead>
                  <tbody>
             

                  <?php 

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      while($rows = mysqli_fetch_assoc($query_run))
                      {
                        ?>
                    <tr>
                       
                      <td width="30">
                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox"  value="<?php echo $rows['school_year_id']; ?>" >
                     </td>
                      <td><?php   echo $rows['school_year']; ?></td>
                      <td width="30">
                          <a href="edit_school_year.php<?php echo '?id='.$rows['school_year_id']; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
                      </td>
                    </tr>
                  

                        <?php
                      }
                    }
                    else
                    {
                      echo "No record found";
                    }

                    ?>

                  </tbody>
                </table>
                </form>

              </div>
              </div>






  </div>
</div>

<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>