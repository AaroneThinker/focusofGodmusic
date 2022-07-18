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
                           <h4 class="card-title">Category Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="admin-add-category.php" class="btn btn-primary">Add New Genre</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                        <?php
                           $sql = "SELECT * FROM genres";
                           $query_run = mysqli_query($db,$sql);
                        ?>
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                             <thead>
                                 <tr>
                                     <th width="5%">No</th>
                                     <th width="60%">Genre Name</th>
                                     <th width="5%">Edit</th>
                                     <th width="5%">Delete</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    if(mysqli_num_rows($query_run) > 0){
                                       foreach($query_run as $genre)
                                       {
                                          // echo $album['id'];
                                          ?>
                                 <tr>
                                     <td><?php echo $genre['id']; ?></td>
                                     <td><?php echo $genre['name']; ?></td>
                                     <td>
                                        <div class="flex align-items-center list-user-action">
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="editGenre.php?id=<?php echo $genre['id'];?>"><i class="ri-pencil-line"></i></a>
                                       </div>
                                       <td>
                                          <form action="createGenre.php" method="post">
                                             <input type="hidden" name="deleteId" value="<?php echo $genre['id'];?>">
                                             <button class="btn btn-sm bg-primary" type="submit" name="deleteGenre" data-toggle="tooltip" data-placement="top"><i class="ri-delete-bin-line"></i></button>
                                          </form>
                                       </td>
                                     </td>
                                 </tr> <?php
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
   <!-- Wrapper END --><!-- Footer -->
   <?php include(SHARED_PATH . '/footer.php'); ?>
<!-- End of Footer -->