<?php include("include/style.php"); ?>
<?php include("../../../app/functions.php"); ?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar"  style="background-image: url(../pages_admin/images/img_bg_4.jpg); height: 750px;">
        <div class="login-box card">
            <div class="card-body">
                 <div class="login-logo">
                    <h2 class="text-center" style="color: #FF5126;"> Get Your ICO Posted.</h2>
                </div>
                <!-- ============================================================== -->
                <!-- Get ICO Form                                                   -->
                <!-- ============================================================== -->
                <form class="m-t-10" novalidate action="../../../app/classes/handler.php" method="POST">
                    <input type="hidden" name="project_action" value="<?php echo isset( $get_project ) ? 'update_project' : 'create_project' ?>">
                    <div class="form-group">
                        <p class="text-success">How's your ICO called ? </p>
                        <div class="controls">
                            <input type="text" name="project_title" placeholder="How should we refer to your ICO?" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Email </p>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Email" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Telegram </p>
                        <div class="controls">
                            <input type="text" name="telegram" placeholder="telegram" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Website </p>
                        <div class="controls">
                            <input type="text" name="website" class="form-control" placeholder="Add Website URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's" required data-validation-required-message="This field is required">
                            <div class="form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Note </p>
                        <div class="controls">
                            <textarea type="text" name="note" placeholder="Note" class="form-control" required data-validation-required-message="This field is required"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <button type="submit" class="btn btn-outline-success waves-effect waves-light btn-block btn-info" onclick="return confirm('Registration Submitted. We will contact you as soon as possible.')"> Send </button>
                        </div>
                    </div> 
                </form>
                <!-- ============================================================== -->
                <!-- End Get ICO Form                                                 -->
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