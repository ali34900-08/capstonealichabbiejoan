<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Content
    	<form action="add_content.php">
            <div class="text-right">
            <button type="submit" class="btn btn-primary" >
              Add content
            </button>
            </div>
         </form>

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

    	 $query = "SELECT * FROM content";
    	 $query_run = mysqli_query($link, $query);


    	?>

      <form action="delete_content.php" method="POST">
      <table class="table table-borderless" id="dataTable" width="100%" >
        <a data-toggle="modal" href="#delete_content"  id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> <?php include('modal_delete.php'); ?>
        <thead class="thead-light">
          <tr>
            
            <th></th>
            <th> Title</th>
            <th></th>
            
            

          </tr>

    	<?php 

        	if(mysqli_num_rows($query_run) > 0)
        	{
        		while($rows = mysqli_fetch_assoc($query_run))
        		{
        			?>



        </thead>
        <tbody>
     		
          <tr>
            <td width="30">
                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox"  value="<?php echo $rows['content_id']; ?>" >
            </td>
            <td><?php   echo $rows['title']; ?></td>
            <td width="30">
                <a href="edit_content.php<?php echo '?id='.$rows['content_id']; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
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
<!-- /.container-fluid -->








<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>