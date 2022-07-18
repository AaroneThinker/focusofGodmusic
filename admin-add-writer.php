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
                           <h4 class="card-title">Add Album</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        
                        <form action="createAlbum.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>Album Name:</label>
                              <input type="text" class="form-control" name="album">
                           </div>
                           <div class="form-group">
                           <label class="form-label">Artists</label>
                              <select class="form-control" aria-label="Default select example" name="artist" id="artist_id">
                                 <option value="">Select Artist</option>
                                 <?php
                                    $sql = "SELECT * FROM artists";
                                    $query_run = mysqli_query($db,$sql);
                                    while($artist = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $artist['id'] . "\"";
                                       echo ">" . $artist['name'] . "</option>";
                                    }
                                 ?>
                              </select>
                           </div>
                           <div class="form-group">
                           <label for="inputNanme4" class="form-label">Genre</label>
                              <select class="form-control" aria-label="Default select example" name="genre" id="artist_id">
                              <option value="">Select Genre</option>
                                 <?php
                                    $sql = "SELECT * FROM genres";
                                    $query_run = mysqli_query($db,$sql);
                                    while($row = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $row['id'] . "\"";
                                       echo ">" . $row['name'] . "</option>";
                                    }
                                 ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Album Profile:</label>
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile" name="albumImage">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                           <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
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