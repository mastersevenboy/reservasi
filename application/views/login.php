<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIR | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="<?php echo base_url();?>auth/check_login" method="POST">
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
              </form>
            </div>
            <p class="footer-text text-center">copyright © 2018 STMIK Widya Utama. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url();?>asset/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>asset/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>asset/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>asset/js/misc.js"></script>
  <script src="<?php echo base_url();?>asset/js/settings.js"></script>
  <script src="<?php echo base_url();?>asset/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>