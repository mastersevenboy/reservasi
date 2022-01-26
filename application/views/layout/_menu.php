<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="<?php echo base_url();?>asset/images/faces/admin.png" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><?php echo $this->session->userdata('nama');?></p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>/beranda">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Master Data</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/karyawan">Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/pekerjaan">Pekerjaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/agama">Agama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/perkawinan">Status Pernikahan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/pelanggan">Pelanggan</a>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/kendaraan">Kendaraan</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/reservasi">Reservasi</a>
          </li>
        </ul>
      </div>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>/transaksi/reservasi">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Transaksi</span>
      </a>
     </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>/laporan">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li>
  </ul>
</nav>