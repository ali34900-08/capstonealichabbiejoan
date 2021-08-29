<?php 

include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>


<div class="container">
        <div class="row" style="padding-left: ">
            <div class="col-lg-4 mb-4">
            <?php include('add_class.php')?>
            </div>


            
            <div class="card shadow col-lg-6 mb-4 mx-auto">
                <div class="card-header py-3 " >
                   <h6 class="m-0 font-weight-bold text-primary">Nursing Departmant Classes</h6>
                </div>
                    <div class="card-body">

                      <?php

      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
      {
        echo '<h4> '.$_SESSION['success'].' </h4>';
        unset($_SESSION['success']);
      }
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
        echo '<h4> '.$_SESSION['status'].' </h4>';
        unset($_SESSION['status']);
      }

       ?>
                       
              <div class="table-responsive">

                  <?php 

                 $query = "select * from class ";
                 $query_run = mysqli_query($link, $query);


                ?>


                <form action="delete_class.php" method="POST">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                  <a data-toggle="modal" href="#delete_class"  id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php include('modal_delete.php'); ?>
                  <thead>
                    <tr>
                        <th></th>
                      <th> Course/Year and Section</th>
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
                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox"  value="<?php echo $rows['class_id']; ?>" >
                      </td>

                      <td><?php   echo $rows['class_name']; ?></td>
                    
                       <td width="30">
                          <a href="edit_class.php<?php echo '?id='.$rows['class_id']; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
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
        </div>
    
  




<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>