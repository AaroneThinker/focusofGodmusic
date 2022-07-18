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
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form>
                              <div class="form-group">
                                 <div class="add-img-user profile-img-edit">
                                    <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                                    <div class="p-image">
                                       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                       <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                 </div>
                                 <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                       <span>Only</span>
                                       <a href="javascript:void();">.jpg</a>
                                       <a href="javascript:void();">.png</a>
                                       <a href="javascript:void();">.jpeg</a>
                                       <span>allowed</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>User Role:</label>
                                 <select class="form-control" id="selectuserrole">
                                    <option>Select</option>
                                    <option>Level 1</option>
                                    <option>Level 2</option>
                                    <option>Level 3</option>
                                 </select>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New User Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="fname">First Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Last Name:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="email">Email:</label>
                                       <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                 </div>
                                 <hr>
                                 <h5 class="mb-3">Security</h5>
                                 <div class="row">
                                    <div class="form-group col-md-12">
                                       <label for="uname">User Name:</label>
                                       <input type="text" class="form-control" id="uname" placeholder="User Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Password:</label>
                                       <input type="password" class="form-control" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="rpass">Repeat Password:</label>
                                       <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add New User</button>
                              </form>
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