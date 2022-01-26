<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Status Kawin</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>perkawinan/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>KD_Sts_Kawin</th>
                    <th>Status_Kawin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($perkawinan as $key => $st): ?>
                  <tr>
                   
                    <td>
                      <?php echo $st->kd_sts_kawin;?>
                    </td>
                    <td>
                      <?php echo $st->status_kawin;?>
                    </td>
                 
                    <td>
                   
                      <a href="<?php echo base_url();?>perkawinan/edit/<?php echo $st->kd_sts_kawin;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>perkawinan/hapus/<?php echo $st->kd_sts_kawin;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>