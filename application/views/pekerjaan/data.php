<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Pekerjaan</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>pekerjaan/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pekerjaan as $key => $ker): ?>
                  <tr>
                   
                    <td>
                      <?php echo $ker->pekerjaan_id;?>
                    </td>
                    <td>
                      <?php echo $ker->pekerjaan;?>
                    </td>
                 
                    <td>
                   
                      <a href="<?php echo base_url();?>pekerjaan/edit/<?php echo $ker->pekerjaan_id;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>pekerjaan/hapus/<?php echo $ker->pekerjaan_id;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
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