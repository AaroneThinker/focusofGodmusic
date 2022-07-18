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
                           <h4 class="card-title">Add Genre</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <?php
                           if(isset($_SESSION['status'])&& $_SESSION !=''){
                              ?>
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <strong>Thank you </strong> <?php echo $_SESSION['status']; ?> 
                                 <button type="button" class="close" data-dismiss="alert" arial-label="close">
                                    <span aria-hidden>&times;</span>
                                 </button>
                              </div>
                              <?php
                              unset($_SESSION['status']);
                           }
                        ?>
                        <form action="createGenre.php" method="POST">
                           <div class="form-group">
                              <label>Genre Name:</label>
                              <input type="text" class="form-control" name="genre" >
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