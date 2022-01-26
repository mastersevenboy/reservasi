<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Pelanggan</h4>
            <p class="card-description">
              <a href="<?php echo base_url();?>pelanggan/tambah" class="btn btn-success btn-xs">Tambah</a>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tempat_Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pelanggan as $key => $pel): ?>
                  <tr>
                    <td>
                      <?php echo $pel->id;?>
                    </td>
                    <td>
                      <?php echo $pel->nama;?>
                    </td> <td>
                      <?php echo $pel->tpt_lahir;?>
                    </td> <td>
                      <?php echo $pel->alamat;?>
                    </td> 
                    <td>
                      <a href="" class="btn btn-success btn-xs">Detail</a>
                      <a href="<?php echo base_url();?>pelanggan/edit/<?php echo $pel->id;?>" class="btn btn-primary btn-xs">Edit</a>
                      <a href="<?php echo base_url();?>pelanggan/hapus/<?php echo $pel->id;?>" OnClick="return confirm('Apakah Anda ingin menghapus data ini?');" class="btn btn-danger btn-xs">Hapus</a>
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