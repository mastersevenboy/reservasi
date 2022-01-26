<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <?php echo $header;?>
    <div class="container-fluid page-body-wrapper">
      <?php echo $menu;?>
      <div class="main-panel">
        <?php echo $konten;?>      
        <?php echo $footer;?>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url();?>asset/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>asset/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?php echo base_url();?>asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>asset/js/misc.js"></script>
  <script src="<?php echo base_url();?>asset/js/dashboard.js"></script>
</body>
</html>