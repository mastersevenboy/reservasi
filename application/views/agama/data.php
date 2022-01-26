<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Agama</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>agama/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>KD_Agama</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($agama as $key => $ag): ?>
                  <tr>
                   
                    <td>
                      <?php echo $ag->kd_agama;?>
                    </td>
                    <td>
                      <?php echo $ag->agama;?>
                    </td>
                 
                    <td>
                   
                      <a href="<?php echo base_url();?>agama/edit/<?php echo $ag->kd_agama;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>agama/hapus/<?php echo $ag->kd_agama;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
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