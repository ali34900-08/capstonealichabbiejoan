<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Content
    </h6>
     <div class="text-right">
    <a href="content.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
	</div>
  <div class="card-body">

         
  		 <form action="code.php" method="POST">
        <div class="form-group">
          <label class="col-sm-2 col-form-label font-weight-bold">Title</label>
          <div class=text-left>
          <div class="col-md-4">
            <input type="text" class="form-control " name="title" id="inputEmail3">
          </div>
        </div>
        </div>
       
       <div class="form-group">
        <label class="col-sm-2 col-form-label font-weight-bold">Content</label>
        <textarea class="form-control" name="textarea" id="demo-editor-bootstrap" rows="7">
          
        </textarea>
      </div>

      <div class="form-group">
         <button type="submit" name="add_btn" class="btn btn-primary"><i class="fas fa-save"></i></button>
      </div>
       
       
      </form>
       <script>
                CKEDITOR.replace( 'demo-editor-bootstrap' );
        </script>
      

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->



<?php 

include('includes/script.php');
include('includes/footer.php');
 ?>
 <script>
 
                $(document).ready(function() {
 
                   $("#demo-editor-bootstrap").Editor();
 
                });
 
</script>
