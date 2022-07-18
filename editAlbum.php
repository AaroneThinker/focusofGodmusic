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
                           <h4 class="card-title">Edit Album</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                     <?php
                        $conn = $db;
                        $id = $_GET['id'];
                        $query = "SELECT * FROM albums WHERE id='$id'";
                        $query_run = mysqli_query($conn,$query);
                        if(mysqli_num_rows($query_run) > 0){
                           foreach($query_run as $album)
                           {
                              ?>
                              <form action="createAlbum.php" method="POST" enctype="multipart/form-data">
                                 <input type="hidden" name="albumId" value="<?php echo $album['id'];?>" />
                                 <div class="form-group">
                                    <label>Album Name:</label>
                                    <input type="text" class="form-control" name="album" value="<?php echo $album['title']; ?>">
                                 </div>
                                 <div class="form-group">
                                 <label for="inputNanme4" class="form-label">Artists</label>
                                    <select class="form-control" aria-label="Default select example" name="artist" id="artist_id" value="<?php echo $album['artists']; ?>">
                                       <?php
                                          $sql = "SELECT * FROM artists";
                                          $query_run = mysqli_query($db,$sql);
                                          while($artist = mysqli_fetch_assoc($query_run)) {
                                             echo "<option value=\"" . $artist['id'] . "\"";
                                             echo ">" . $artist['a_name'] . "</option>";
                                          }
                                       ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                 <label for="inputNanme4" class="form-label">Genre</label>
                                    <select class="form-control" aria-label="Default select example" name="genre" id="artist_id" value="<?php echo $album['genre']; ?>">
                                       <?php
                                          $sql = "SELECT * FROM genres";
                                          $query_run = mysqli_query($db,$sql);
                                          while($row = mysqli_fetch_assoc($query_run)) {
                                             echo "<option value=\"" . $row['id'] . "\"";
                                             echo ">" . $row['g_name'] . "</option>";
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
                                       <input type="hidden" name="albumImageOld"  value="<?php echo $album['artworkPath'];?>">
                                 </div>
                                 <div>
                                    <img src="<?php echo "upload/".$album['artworkPath'];?>" alt="Image" width="60" hieght="60">
                                 </div>
                                 </br>
                                 <button type="submit" class="btn btn-primary" name="updateAlbum">Update</button>
                                 <button type="reset" class="btn btn-danger">Reset</button>
                           </form>
                        <?php
                           }
                        }
                        else
                        {
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