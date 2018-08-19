<?php include("../../include/include_admin/style.php"); ?>
<body class="fix-header fix-sidebar card-no-border">
   <!-- ============================================================== -->
   <!-- Preloader - style you can find in spinners.css -->
   <!-- ============================================================== -->
   <?php include("../../include/include_general/preloader.php"); ?>
   <!-- ============================================================== -->
   <!-- Main wrapper - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <div id="main-wrapper">
      <?php include("../../include/include_admin/header.php"); ?>
      <?php include("../../include/include_admin/left_sidebar.php"); ?>
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb-->
         <!-- ============================================================== -->
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
               <h3 class="text-themecolor">Browse Campaign</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Browse Campaign</li>
               </ol>
            </div>
         </div>
         <!-- ============================================================== -->
         <!-- End Bread crumb -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Container fluid  -->
         <!-- ============================================================== -->
         <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Filters -->
            <!-- ============================================================== -->
            <div class="row">
               <div class="col-md-4">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <button class="btn btn-info" type="button">Go!</button>
                     </div>
                     <input type="text" class="form-control" placeholder="Search for...">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <select class="form-control custom-select">
                        <option>-- Filter By --</option>
                        <option>Name</option>
                        <option>Value</option>
                        <option>Newest</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <select class="form-control custom-select">
                        <option>-- Order By --</option>
                        <option>Ascending</option>
                        <option>Descending</option>
                     </select>
                  </div>
               </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Filters -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Campaigns -->
            <!-- ============================================================== -->
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body p-b-0">
                     <h4 class="card-title">Campaigns</h4>
                  </div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs customtab" role="tablist">
                     <li class="nav-item"> 
                        <a class="nav-link active" data-toggle="tab" href="#active_campaigns" role="tab">
                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                        <span class="hidden-xs-down">Active Campaign</span>
                        </a>
                     </li>
                     <li class="nav-item"> 
                        <a class="nav-link" data-toggle="tab" href="#closed_participants" role="tab">
                        <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                        <span class="hidden-xs-down">Closed Participants</span>
                        </a>
                     </li>
                     <li class="nav-item"> 
                        <a class="nav-link" data-toggle="tab" href="#finished_campaigns" role="tab">
                        <span class="hidden-sm-up"><i class="ti-email"></i></span> 
                        <span class="hidden-xs-down">Finished Campaigns</span>
                        </a>
                     </li>
                  </ul>
                  <!-- Tab panes 1-->
                  <div class="tab-content">
                     <div class="tab-pane active" id="active_campaigns" role="tabpanel">
                        <div class="p-20">
                           <div class="row">
                              <!-- Active Campaign Cards -->
                              <div class="col-lg-4 col-md-6">
                                 <div class="card">
                                    <img class="card-img-top img-responsive" src="../pages_admin/images/client/img1.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #383F48;">
                                       <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                       <h6 class="card-subtitle text-justify">
                                          Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                       </h6>
                                       <div class="col-lg-12 col-md-12 col-xs-12">
                                          <div class="card-body">
                                             <div class="collapse m-t-15" id="pgr2">
                                                <pre class="line-numbers language-javascript">
                                                                        <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                    </pre>
                                             </div>
                                             <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                             <i class="fa fa-bitcoin">&nbsp 88</i>
                                             </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                             <i class="fa fa-users">&nbsp 88 </i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                 <div class="card">
                                    <img class="card-img-top img-responsive" src="../pages_admin/images/client/img2.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #383F48;">
                                       <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                       <h6 class="card-subtitle text-justify">
                                          Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                       </h6>
                                       <div class="col-lg-12 col-md-12 col-xs-12">
                                          <div class="card-body">
                                             <div class="collapse m-t-15" id="pgr2">
                                                <pre class="line-numbers language-javascript">
                                                                        <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                    </pre>
                                             </div>
                                             <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                             <i class="fa fa-bitcoin">&nbsp 88</i>
                                             </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                             <i class="fa fa-users">&nbsp 88 </i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                 <div class="card">
                                    <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #383F48;">
                                       <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                       <h6 class="card-subtitle text-justify">
                                          Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                       </h6>
                                       <div class="col-lg-12 col-md-12 col-xs-12">
                                          <div class="card-body">
                                             <div class="collapse m-t-15" id="pgr2">
                                                <pre class="line-numbers language-javascript">
                                                                        <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                    </pre>
                                             </div>
                                             <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                             <i class="fa fa-bitcoin">&nbsp 88</i>
                                             </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                             <i class="fa fa-users">&nbsp 88 </i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Active Campaign Cards -->
                        </div>
                     </div>
                     <!-- Tab panes 2-->
                     <div class="tab-pane  p-20" id="closed_participants" role="tabpanel">
                        <div class="row">
                           <!-- Closed Participants Cards -->
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img1.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img2.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Closed Participants Cards -->
                     </div>
                     <!-- Tab panes 3-->
                     <div class="tab-pane p-20" id="finished_campaigns" role="tabpanel">
                        <div class="row">
                           <!-- Finished Campaign Cards -->
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img1.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img2.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="card">
                                 <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                                 <div class="card-body" style="background-color: #383F48;">
                                    <h4 class="card-title text-success"><a href="project.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                       Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                       <div class="card-body">
                                          <div class="collapse m-t-15" id="pgr2">
                                             <pre class="line-numbers language-javascript">
                                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                                </pre>
                                          </div>
                                          <div class="progress m-t-20">
                                             <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Profile Detail" class="btn btn-block btn-info ">
                                          <i class="fa fa-bitcoin">&nbsp 88</i>
                                          </a>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="View Participants" class="btn btn-block btn-warning ">
                                          <i class="fa fa-users">&nbsp 88 </i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Finished Campaign Cards -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Campaigns -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
         </div>
         <!-- ============================================================== -->
         <!-- End Container fluid  -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- footer -->
         <!-- ============================================================== -->
         <?php include("../../include/include_admin/footer.php"); ?>
         <!-- ============================================================== -->
         <!-- End footer -->
         <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
   </div>
   <!-- ============================================================== -->
   <!-- End Wrapper -->
   <!-- ============================================================== -->
   <!-- ============================================================== -->
   <!-- All Jquery -->
   <!-- ============================================================== -->
   <?php
      include("../../include/include_admin/script.php"); 
      ?>