<?php 
    require_once('private/initialize.php'); 

   //  require_login();
    
    $id = $_GET['id'] ?? '1'; // PHP > 7.0

?>

<?php $page_title = 'Testimony Details'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Edit Genre</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <?php
                           $conn = $db; 
                           $id = $_GET['id'];
                           $query = "SELECT * FROM genres WHERE id='$id'";
                           $query_run = mysqli_query($conn,$query);
                           if(mysqli_num_rows($query_run) > 0){
                              foreach($query_run as $genre)
                              {
                                 ?>
                                 <form action="createGenre.php" method="POST">
                                    <input type="hidden" name="genreId" value="<?php echo $genre['id'];?>"/>
                                    <div class="form-group">
                                       <label>Genre Name:</label>
                                       <input type="text" class="form-control" name="genre" value="<?php echo $genre['name']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="updateGenre">Update</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                 </form>
                                 <?php
                              }
                           }else{
                              echo "No record Available";
                           }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
         <!-- Footer -->
         <?php include(SHARED_PATH . '/footer.php'); ?>
<!-- End of Footer -->