<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<?php $get_id = $_GET['id']; ?>

<div class="container">
 <div class="text-left">
    <a href="student_register.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
  </div>
  </div>

<div class="container-fluid">
  <div class="row">
<div class="card mb-5 mx-auto" style="max-width: 400px">
  <div class="card-body">
    <h5 class="card-title">Edit Student Information</h5>

    <?php include('edit_student_form.php') ?>
   
  </div>
</div>
 </div>
  </div>


<div class="container-fluid">

<div class="card shadow mb-4 mx-auto" style="max-width: 1000px">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Student Information
    </h6>
    
  <div class="card-body">

  		 
    <div class="table-responsive">

      <?php 

       $query = "select * from student LEFT JOIN class ON student.class_id = class.class_id ORDER BY student.student_id DESC";
       $query_run = mysqli_query($link, $query);


      ?>

      <form action="delete_student.php" method="POST">
        <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
          <a data-toggle="modal" href="#delete_student"  id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php include('modal_delete.php'); ?> 
        <thead class="thead-light">
          <tr>
            <th></th>
            <th> Student ID </th>
            <th> Password</th>
            <th> Name</th>
            <th> Address</th>
            <th> Class</th>
            <th></th>
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
              <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox"  value="<?php echo $rows['id']; ?>" >
            </td>
            
            <td><?php   echo $rows['student_id']; ?></td>
            <td><?php   echo $rows['password']; ?></td>
            <td><?php echo $rows['firstname'] . " " . $rows['middlename'] ." " .  $rows['lastname'] ; ?></td>
            <td><?php   echo $rows['address']; ?></td>
            <td><?php   echo $rows['class_name']; ?></td>
           
            <td width="30">
            <a href="edit_student.php<?php echo '?id='.$rows['id']; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
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
<!-- /.container-fluid -->







<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>