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
                           <h4 class="card-title">Artists Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-writer.php" class="btn btn-primary">Add New Artist</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           
                        <?php
                           $sql = "SELECT 
                                 albums.id, albums.title,artists.name as artistName,genres.name as genreName,albums.artworkPath 
                                 FROM albums INNER JOIN artists ON albums.artists=artists.id INNER JOIN genres ON 
                                 albums.genre=genres.id ORDER BY albums.id DESC
                                 ";
                           $query_run = mysqli_query($db,$sql);
                        ?>
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 10%;">Album Title</th>
                                    <th style="width: 10%;">Artist</th>
                                    <th style="width: 10%;">Genre</th>
                                    <th style="width: 5%;">ArtworkPath</th>
                                    <th style="width: 1%;">Edit</th>
                                    <th style="width: 1%;">Delete</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                    if(mysqli_num_rows($query_run) > 0){
                                       while($album = mysqli_fetch_assoc($query_run))
                                       {
                                          ?>
                                             <tr>
                                                <td><?php echo $album['id']; ?></td>
                                                <td><?php echo $album['title']; ?></td>
                                                <td><?php echo $album['artistName']; ?></td>
                                                <td><?php echo $album['genreName']; ?></td>
                                                <td>
                                                   <img src="<?php echo "upload/".$album['artworkPath']; ?>" width="40" hieght="20" alt="Image" srcset="">
                                                </td>
                                                <td>
                                                   <div class="flex align-items-center list-user-action">
                                                      <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="editAlbum.php?id=<?php echo $album['id'];?>"><i class="ri-pencil-line"></i></a>
                                                   </div>
                                                </td>
                                                <td>
                                                   <form action="createAlbum.php" method="post">
                                                      <input type="hidden" name="deleteId" value="<?php echo $album['id'];?>">
                                                      <input type="hidden" name="deleteImage" value="<?php echo $album['artworkPath'];?>">
                                                      <button class="btn btn-sm bg-primary" type="submit" name="deleteAlbum" data-toggle="tooltip" data-placement="top"><i class="ri-delete-bin-line"></i></button>
                                                   </form>
                                                </td>
                                             </tr>
                                          <?php
                                       }
                                 }
                                 else
                                 {
                                    ?>
                                       <tr>
                                          <td>No Record Available </td>
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