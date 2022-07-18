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
                           <h4 class="card-title">Singer Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-singer.php" class="btn btn-primary">Add New Singer</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 50%;">Artist Name</th>
                                    <th style="width: 10%;">Edit</th>
                                    <th style="width: 10%;">Delete</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $sql = "SELECT * FROM artists";
                                    $query_run = mysqli_query($db,$sql);
                                    while($artist = mysqli_fetch_assoc($query_run)) { 
                                 ?>
                                 <tr>
                                    <td><?php echo $artist['id']; ?></td>
                                    <td><?php echo $artist['name']; ?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="editArtist.php?id=<?php echo $artist['id'];?>"><i class="ri-pencil-line"></i></a>
                                       </div>
                                    </td>
                                    <td>
                                       <form action="createArtists.php" method="post">
                                          <input type="hidden" name="deleteId" value="<?php echo $artist['id'];?>">
                                          <button class="btn btn-sm bg-primary" type="submit" name="deleteArtist" data-original-title="Delete" data-toggle="tooltip" data-placement="top"><i class="ri-delete-bin-line"></i></button>
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
<!-- Wrapper END --><!-- Footer -->
   <?php include(SHARED_PATH . '/footer.php'); ?>
<!-- End of Footer -->