<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Karyawan</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>karyawan/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($karyawan as $key => $kar): ?>
                  <tr>
                    <td class="py-1">
                      <?php echo $key+1;?>
                    </td>
                    <td>
                      <?php echo $kar->nama;?>
                    </td>
                    <td>
                      <?php echo $kar->email;?>
                    </td>
                    <td>
                      <?php echo $kar->nohp;?>
                    </td>
                    <td>
                      <?php if ($kar->status=='1'): ?>
                        <?php echo '<label class="btn btn-success btn-xs">Aktif</label>'?>
                      <?php else: ?>
                         <?php echo '<label class="btn btn-danger btn-xs">Tidak Aktif</label>'?>
                      <?php endif ?>
                    </td>
                    <td>
                      <a href="" class="btn btn-success btn-xs">Detail</a>
                      <a href="<?php echo base_url();?>karyawan/edit/<?php echo $kar->id;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>karyawan/hapus/<?php echo $kar->id;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
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