<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Reservasi</h4>
           
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Pelanggan</th>
                     <th>Kendaraan</th>
                      <th>Tgl_Reservasi</th>
                       <th>Lama_Reservasi</th>
                        <th>Biaya_Reservasi</th>
                         <th>Catatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($reservasi as $key => $res): ?>
                  <tr>
                    
                    <td>
                      <?php echo $res->pelanggan_id;?>
                    </td>
                     <td>
                      <?php echo $res->kendaraan_id;?>
                    </td>
                    <td>
                      <?php echo $res->tgl_reservasi;?>
                    </td>
                     <td>
                      <?php echo $res->lama_reservasi;?>
                    </td>
                     <td>
                      <?php echo $res->biaya_reservasi;?>
                    </td>
                     <td>
                      <?php echo $res->catatan;?>
                    </td>
                    <td>
                   
                  <a href="<?php echo base_url();?>reservasi/edit/<?php echo $res->id;?>" class="btn btn-primary btn-xs">Edit</a>
                  <a href="<?php echo base_url();?>reservasi/hapus/<?php echo $res->id;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
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