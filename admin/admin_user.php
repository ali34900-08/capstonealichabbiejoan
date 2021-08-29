<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<?php include('modal.php');?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Nursing Department Admin Users
            <div class="text-right">
            	
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admin">
              Register New User
            </button>

            </div>

    </h6>
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

    	 $query = "SELECT * FROM users";
    	 $query_run = mysqli_query($link, $query);


    	?>
      <form action="delete_admin.php" method="POST">
      <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
        <a data-toggle="modal" href="#delete_admin"  id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php include('modal_delete.php'); ?>
        <thead class="thead-light">
          <tr>
            <th></th>
            <th> Username </th>
            <th> Password</th>
            <th> Name</th>
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
            <td><?php 	echo $rows['username']; ?></td>
            <td><?php 	echo $rows['password']; ?></td>
            <td><?php echo $rows['firstname'] . " " . $rows['lastname']; ?></td>
            
             <td width="30">
            <a href="edit_admin.php<?php echo '?id='.$rows['id']; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
            </td>
           
          </tr>


        			<?php
        		}
        	}
        	else
        	{
        		echo "<h2> No record found </h2>";
        	}

        	?>
        
        </tbody>
      </table>
    </form>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->



<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>