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
                           <h4 class="card-title">Add Artist</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                     <?php  
                           $conn = $db;
                           $id = $_GET['id'];
                           $query = "SELECT * FROM artists WHERE id='$id'";
                           $query_run = mysqli_query($conn,$query);
                           if(mysqli_num_rows($query_run) > 0){
                              foreach($query_run as $row)
                              {
                                 ?>
                                 <form action="createArtists.php" method="POST">
                                    <input type="hidden" name="artistId" value="<?php echo $row['id'];?>" />
                                    <div class="form-group">
                                       <label>Artist Name:</label>
                                       <input type="text" class="form-control" name="artist" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="updateArtist">Update</button>
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