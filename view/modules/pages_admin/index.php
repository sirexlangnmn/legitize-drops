<?php include("../../include/include_admin/style.php"); ?>

<body class="fix-header single-column card-no-border" style="background-image: url(../pages_admin/images/img_bg_4.jpg); height: 750px;">
     <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                        <?php include("../../include/include_admin/navbar_logo.php"); ?>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0"></ul>
                </div>
            </nav>
        </header>
            <div class="row" style="margin-top: 30px;"> 
                <div class="col-lg-4 col-md-4 col-sm-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="login-box">
                        <div class="login-logo">
                            <h1 class="text-center" style="color: #FF5126; font-family: Times New Roman"> Legitize Drops</h1>
                        </div>
                        <div class="card" style="background-color: #383F48;">
                            <div class="card-body">
                                <h4 class="text-center text-success">Login here to start your session</h4>                               
                                <form class="m-t-40" novalidate>
                                    <div class="form-group">
                                        <h5>Username </h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password </h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6 col-xs-5">
                                              <div class="form-group">
                                                    <div class="controls">
                                                        <input type="checkbox" id="basic_checkbox_2" name="styled_single_checkbox" class="filled-in custom-control-input" />
                                                        <label for="basic_checkbox_2">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>  <!-- /.col -->
                                        <div class="col-md-6 col-xs-7">
                                            <button type="submit" class="btn btn-outline-success waves-effect waves-light btn-block btn-info"> Sign in </button>
                                        </div> <!-- /.col -->
                                    </div> 
                                    <div class="social-auth-links text-center">
                                        <p>- OR -</p>
                                        <a href="https://legitizedrops.com/" target="_blank" class="btn btn-facebook waves-effect waves-light btn-block btn-info"><i class="fa fa-facebook"></i>&nbsp Sign in using Facebook </a>
                                        <a href="https://legitizedrops.com/" target="_blank" class="btn btn-twitter waves-effect waves-light btn-block btn-info"><i class="fa fa-twitter"></i>&nbsp Sign in using Twitter </a>
                                    </div>
                                    <br />
                                    <a href="#">I forgot my password</a><br>
                                    <a href="register.php" class="text-center">Register a new membership</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12"></div>
               </div>
   


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php 
        include("../../include/include_admin/script.php");
        include("../../include/include_general/validation.php");
     ?>