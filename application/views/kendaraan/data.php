<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Kendaraan</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>kendaraan/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Kendaraan</th>
                    <th>Plat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kendaraan as $key => $ken): ?>
                  <tr>
                    <td>
                      <?php echo $ken->id;?>
                    </td>
                    <td>
                      <?php echo $ken->kendaraan;?>
                    </td> <td>
                      <?php echo $ken->plat;?>
                    </td> <td>
                      <?php echo $ken->keterangan;?>
                    </td> 
                    <td>
                      <a href="" class="btn btn-success btn-xs">Detail</a>
                      <a href="<?php echo base_url();?>kendaraan/edit/<?php echo $ken->id;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>kendaraan/hapus/<?php echo $ken->id;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
                    </td>
                  </tr>
                </tbody>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>