
<?php include("../../include/include_hunter/style.php"); ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <?php include("../../include/include_general/preloader.php"); ?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar"  style="background-image: url(../pages_admin/images/img_bg_4.jpg); height: 750px;">
        <div class="login-box card">
            <div class="card-body">
                <!-- ============================================================== -->
                <!-- Login Form                                                     -->
                <!-- ============================================================== -->
                <form class="m-t-40" novalidate id="loginform" action="#">
                    <a href="javascript:void(0)" class="text-center db"><img src="../pages_admin/images/logo/legitize_logo.png" style="width: 250px; height: 80px; margin-top: -40px; margin-bottom: 20px;" alt="Home" />
                    </a>

                     <div class="form-group">
                        <p class="text-success">Username </p>
                        <div class="controls">
                            <input type="text" name="username" placeholder="Username" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Password </p>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 m-t-20">
                            <button type="submit" class="btn btn-outline-success waves-effect waves-light btn-block btn-info"> Sign in </button>
                        </div>
                        <div class="col-md-12 col-xs-12 m-t-20 social-auth-links text-center">
                            <p>- OR -</p>
                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-facebook waves-effect waves-light btn-block btn-info"><i class="fa fa-facebook"></i>&nbsp Sign in using Facebook </a>
                        </div>
                         <div class="col-md-12 col-xs-12 m-t-20 social-auth-links text-center">
                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-twitter waves-effect waves-light btn-block btn-info"><i class="fa fa-twitter"></i>&nbsp Sign in using Twitter </a>
                        </div>
                        </div>
                        <div class="col-md-12 col-xs-12 m-t-20">
                            <a href="register.php" id="to-recover" class="text-info text-center">
                            <i class="fa fa-pencil m-r-5"></i> New? Signup Here.</a>
                        </div> 
                        <div class="col-md-12 col-xs-12 m-t-20">
                            <a href="javascript:void(0)" id="to-recover" class="text-info text-center">
                            <i class="fa fa-lock m-r-5"></i> Forgot Password?</a>
                        </div> 
                    </div> 
                </form>
                <!-- ============================================================== -->
                <!-- End Login Form                                                 -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recover Password Form                                          -->
                <!-- ============================================================== -->
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- ============================================================== -->
                <!-- End Recover Password Form                                      -->
                <!-- ============================================================== -->
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<?php 
    include("../../include/include_hunter/script.php");
    include("../../include/include_general/validation.php"); 
?>