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
                           <h4 class="card-title">Song Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-song.php" class="btn btn-primary">Add New Song</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 20%;">Title</th>
                                    <th style="width: 5%;">Artist</th>
                                    <th style="width: 5%;">Album</th>
                                    <th style="width: 5%;">Genre</th>
                                    <!-- <th style="width: 5%;">Duration</th> -->
                                    <th style="width: 35%;">Path</th>
                                    <th style="width: 5%;">Order</th>
                                    <th style="width: 5%;">Plays</th>
                                    <th style="width: 25%;">Edit</th>
                                    <th style="width: 25%;">Delete</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 
                              <?php
                                    $sql = "SELECT * FROM songs";
                                    $query_run = mysqli_query($db,$sql);
                                    while($song = mysqli_fetch_assoc($query_run)) { 
                                 ?>
                                 <tr>
                                 <td><?php echo $song['id']; ?></td>
                                 <td><?php echo $song['title']; ?></td>
                                 <td><?php echo $song['artist']; ?></td>
                                 <td><?php echo $song['album']; ?></td>
                                 <td><?php echo $song['genre']; ?></td>
                                 <td><?php echo $song['path']; ?></td>
                                 <td><?php echo $song['albumOrder']; ?></td>
                                 <td><?php echo $song['plays']; ?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="editMusic.php?id=<?php echo $song['id'];?>"><i class="ri-pencil-line"></i></a>
                                       </div>
                                    </td>
                                    <td>
                                       <form action="createSong.php" method="post">
                                          <input type="hidden" name="deleteId" value="<?php echo $song['id'];?>">
                                          <input type="hidden" name="deleteImage" value="<?php echo $song['path'];?>">
                                          <button class="btn btn-sm bg-primary" type="submit" name="deleteSong" data-toggle="tooltip" data-placement="top"><i class="ri-delete-bin-line"></i></button>
                                       </form>
                                    </td>
                                 </tr>
                                 <?php
                                    }
                                 ?>
                              </tbody>
                           </table>
                        </div>
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