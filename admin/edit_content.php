<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>
<?php $get_id = $_GET['id']; ?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Content
    </h6>
    <br>
     <div class="text-left">
    <a href="content.php" class="btn btn-transparent"><i class="fas fa-arrow-left"></i> Back</a>
	</div>
   <div class="text-right">
     <a href="add_content.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Content</a>
  </div>
  <div class="card-body">

                    <?php
                     $query = mysqli_query($link,"select * from content where content_id = '$get_id'")or die(mysqli_error());
                     $row = mysqli_fetch_array($query);
                     ?>

  		 <form method="POST">
        <div class="form-group">
          <label class="col-sm-2 col-form-label font-weight-bold">Title</label>
          <div class=text-left>
          <div class="col-md-4">
            <input type="text" class="form-control" name="title" id="inputEmail3" value="<?php echo $row['title'];?>">
          </div>
        </div>
        </div>
       
       <div class="form-group">
        <label class="col-sm-2 col-form-label font-weight-bold">Content</label>
        <textarea class="form-control" name="content" id="demo-editor-bootstrap" rows="7">
          <?php echo $row['content']; ?>
        </textarea>
      </div>

      <div class="form-group">
         <button name="update" type="submit" name="update" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
      </div>
      </form>

                    <?php
                    if (isset($_POST['update'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    mysqli_query($link,"update content set title = '$title' , content = '$content' where content_id = '$get_id'")or die(mysqli_error());
                    ?>
                    <script>
                    window.location = 'content.php';
                    </script>
                    <?php
                    }
                    ?>


      
    
      
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<script>
                CKEDITOR.replace( 'demo-editor-bootstrap' );
        </script>


<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>
