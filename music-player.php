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
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body">
                       <div class="row">
                        <div class="col-lg-4">
                           <img src="images/dashboard/feature-album/01.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-8">
                           <div class="d-flex align-items-top justify-content-between iq-music-play-detail">
                              <div class="music-detail">
                                 <h3>DJ Khaled Featuring</h3>
                                 <span>Edyta Gorniak</span>
                                 <p class="mb-0">389382k Views</p>
                                 <p >Song   ·  45 Plays</p>
                                 <div class="d-flex align-items-center">                                       
                                    <a href="javascript:void(0);" class="btn btn-primary iq-play mr-2">Play Music</a>
                                 </div>
                              </div>
                              <div class="music-right">
                                 <div class="d-flex align-items-center">
                                    <div class="iq-circle mr-2 share"><a href="javascript:void();"><i class="las la-share-alt-square text-primary"></i></a></div>
                                    <div class="iq-circle mr-2"><a href="javascript:void();"><i class="ri-heart-fill  text-primary"></i></a></div>                 
                                    <div class="iq-circle">
                                        <a href="javascript:void();"><i class="las la-download text-primary"></i></a>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="iq-card">
               <div class="iq-card-body">
                  <ul class="list-unstyled iq-music-slide mb-0">
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/01.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/02.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/03.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/04.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/05.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="d-flex justify-content-between align-items-center row">
                           <div class="media align-items-center col-10 col-md-5">
                              <div class="iq-realese-song ">
                                 <a href="javascript:void(0);"><img src="images/dashboard/realease-song/06.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                              </div>
                              <div class="media-body ml-3">
                                 <p class="mb-0">DJ Khaled Featuring</p>
                                 <small>Edyta Gorniak</small>
                              </div>
                           </div>
                           <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                           <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                           <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i></p>
                           <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="ri-more-2-fill text-primary"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
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