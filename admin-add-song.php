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
                           <h4 class="card-title">Add Song</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="createSong.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>Song Title:</label>
                              <input type="text" class="form-control" name="songName">
                              <div class="form-group">
                                 <label>Song Artist:</label>
                                 <select class="form-select" aria-label="Default select example" name="songArtist" id="artist_id">
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
                              <label>Song Genre:</label>
                              <select class="form-select" aria-label="Default select example" name="songGenre" id="artist_id">
                                 <?php
                                    $sql = "SELECT * FROM genres";
                                    $query_run = mysqli_query($db,$sql);
                                    while($genre = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $genre['id'] . "\"";
                                       echo ">" . $genre['name'] . "</option>";
                                    }
                                    ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Song Album:</label>
                              <select class="form-select" aria-label="Default select example" name="songAlbum" id="artist_id">
                                 <?php
                                    $sql = "SELECT * FROM albums";
                                    $query_run = mysqli_query($db,$sql);
                                    while($albums = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $albums['id'] . "\"";
                                       echo ">" . $albums['title'] . "</option>";
                                    }
                                    ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Song Album Play:</label>
                              <select class="form-select" aria-label="Default select example" name="songAlbumPlays" id="artist_id">
                                 <?php
                                    $sql = "SELECT * FROM albums";
                                    $query_run = mysqli_query($db,$sql);
                                    while($albums = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $albums['id'] . "\"";
                                       echo ">" . $albums['title'] . "</option>";
                                    }
                                    ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Song Album Order:</label>
                              <select class="form-select" aria-label="Default select example" name="songAlbumOrder" id="artist_id">
                                 <?php
                                    $sql = "SELECT * FROM albums";
                                    $query_run = mysqli_query($db,$sql);
                                    while($albums = mysqli_fetch_assoc($query_run)) {
                                       echo "<option value=\"" . $albums['id'] . "\"";
                                       echo ">" . $albums['title'] . "</option>";
                                    }
                                    ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Song:</label>
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile" name="song">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
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